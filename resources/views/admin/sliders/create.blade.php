@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.slider.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.sliders.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="page_name">{{ trans('cruds.slider.fields.page_name') }}</label>
                    <input class="form-control {{ $errors->has('page_name') ? 'is-invalid' : '' }}" type="text" name="page_name" id="page_name" value="{{ old('page_name', '') }}" required>
                    @if($errors->has('page_name'))
                        <span class="text-danger">{{ $errors->first('page_name') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.slider.fields.page_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="title">{{ trans('cruds.slider.fields.title') }}</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}">
                    @if($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.slider.fields.title_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="content">{{ trans('cruds.slider.fields.content') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{!! old('content') !!}</textarea>
                    @if($errors->has('content'))
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.slider.fields.content_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="link_text">{{ trans('cruds.slider.fields.link_text') }}</label>
                    <input class="form-control {{ $errors->has('link_text') ? 'is-invalid' : '' }}" type="text" name="link_text" id="link_text" value="{{ old('link_text', '') }}">
                    @if($errors->has('link_text'))
                        <span class="text-danger">{{ $errors->first('link_text') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.slider.fields.link_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="link_url">{{ trans('cruds.slider.fields.link_url') }}</label>
                    <input class="form-control {{ $errors->has('link_url') ? 'is-invalid' : '' }}" type="text" name="link_url" id="link_url" value="{{ old('link_url', '') }}">
                    @if($errors->has('link_url'))
                        <span class="text-danger">{{ $errors->first('link_url') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.slider.fields.link_url_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.slider.fields.is_active') }}</label>
                    @foreach(App\Models\Slider::IS_ACTIVE_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                            <input class="form-check-input" type="radio" id="is_active_{{ $key }}" name="is_active" value="{{ $key }}" {{ old('is_active', '1') === (string) $key ? 'checked' : '' }} required>
                            <label class="form-check-label" for="is_active_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if($errors->has('is_active'))
                        <span class="text-danger">{{ $errors->first('is_active') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.slider.fields.is_active_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="picture">{{ trans('cruds.slider.fields.picture') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('picture') ? 'is-invalid' : '' }}" id="picture-dropzone">
                    </div>
                    @if($errors->has('picture'))
                        <span class="text-danger">{{ $errors->first('picture') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.slider.fields.picture_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function (file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', '{{ route('admin.sliders.storeCKEditorImages') }}', true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() { reject(genericErrorText) });
                                        xhr.addEventListener('abort', function() { reject() });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                                            }

                                            $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                                            resolve({ default: response.url });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '{{ $slider->id ?? 0 }}');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>

    <script>
        var uploadedPictureMap = {}
        Dropzone.options.pictureDropzone = {
            url: '{{ route('admin.sliders.storeMedia') }}',
            maxFilesize: 3, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 3,
                // width: 4096,
                // height: 4096
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="picture[]" value="' + response.name + '">')
                uploadedPictureMap[file.name] = response.name
            },
            removedfile: function (file) {
                console.log(file)
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedPictureMap[file.name]
                }
                $('form').find('input[name="picture[]"][value="' + name + '"]').remove()
            },
            init: function () {
                @if(isset($slider) && $slider->picture)
                var files = {!! json_encode($slider->picture) !!}
                for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="picture[]" value="' + file.file_name + '">')
                }
                @endif
            },
            error: function (file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
