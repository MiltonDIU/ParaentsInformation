@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.linkCategory.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.link-categories.update", [$linkCategory->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="title">{{ trans('cruds.linkCategory.fields.title') }}</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $linkCategory->title) }}" required>
                    @if($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.title_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="title">{{ trans('cruds.linkCategory.fields.slug') }}</label>
                    <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $linkCategory->slug) }}" required>
                    @if($errors->has('slug'))
                        <span class="text-danger">{{ $errors->first('slug') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.slug_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="content">{{ trans('cruds.linkCategory.fields.content') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{!! old('content', $linkCategory->content) !!}</textarea>
                    @if($errors->has('content'))
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.content_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="picture">{{ trans('cruds.linkCategory.fields.picture') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('picture') ? 'is-invalid' : '' }}" id="picture-dropzone">
                    </div>
                    @if($errors->has('picture'))
                        <span class="text-danger">{{ $errors->first('picture') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.picture_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="external_link">{{ trans('cruds.linkCategory.fields.external_link') }}</label>
                    <input class="form-control {{ $errors->has('external_link') ? 'is-invalid' : '' }}" type="text" name="external_link" id="external_link" value="{{ old('external_link', $linkCategory->external_link) }}">
                    @if($errors->has('external_link'))
                        <span class="text-danger">{{ $errors->first('external_link') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.external_link_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="external_link">{{ trans('cruds.linkCategory.fields.external_link_text') }}</label>
                    <input class="form-control {{ $errors->has('external_link_text') ? 'is-invalid' : '' }}" type="text" name="external_link_text" id="external_link_text" value="{{ old('external_link_text', $linkCategory->external_link_text) }}">
                    @if($errors->has('external_link_text'))
                        <span class="text-danger">{{ $errors->first('external_link_text') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.external_link_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="position">{{ trans('cruds.linkCategory.fields.position') }}</label>
                    <input class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}" type="number" name="position" id="position" value="{{ old('position', $linkCategory->position) }}" step="1">
                    @if($errors->has('position'))
                        <span class="text-danger">{{ $errors->first('position') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.position_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.linkCategory.fields.page_name') }}</label>
                    <select class="form-control {{ $errors->has('page_name') ? 'is-invalid' : '' }}" name="page_name" id="page_name">
                        <option value disabled {{ old('page_name', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\LinkCategory::PAGE_NAME_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('page_name', $linkCategory->page_name) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('page_name'))
                        <span class="text-danger">{{ $errors->first('page_name') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.page_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.linkCategory.fields.image_position') }}</label>
                    <select class="form-control {{ $errors->has('image_position') ? 'is-invalid' : '' }}" name="image_position" id="image_position">
                        <option value disabled {{ old('image_position', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\LinkCategory::IMAGE_POSITION_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('image_position', $linkCategory->image_position) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('image_position'))
                        <span class="text-danger">{{ $errors->first('image_position') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.image_position_helper') }}</span>
                </div>


                <div class="form-group">
                    <label for="links">{{ trans('cruds.linkCategory.fields.title') }}</label>
                    <div style="padding-bottom: 4px">
                        <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                    </div>
                    <select class="form-control select2 {{ $errors->has('links') ? 'is-invalid' : '' }}" name="links[]" id="links" multiple>
                        @foreach($links as $id => $link)
                            <option value="{{ $id }}" {{ (in_array($id, old('links', [])) || $linkCategory->linkCategoryLinks->contains($id)) ? 'selected' : '' }}>{{ $link }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('links'))
                        <span class="text-danger">{{ $errors->first('links') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.title_helper') }}</span>
                </div>




                <div class="form-group">
                    <label>{{ trans('cruds.linkCategory.fields.is_utilities') }}</label>
                    @foreach(App\Models\LinkCategory::IS_UTILITIES_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('is_utilities') ? 'is-invalid' : '' }}">
                            <input class="form-check-input" type="radio" id="is_utilities_{{ $key }}" name="is_utilities" value="{{ $key }}" {{ old('is_utilities', $linkCategory->is_utilities) === (string) $key ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_utilities_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if($errors->has('is_utilities'))
                        <span class="text-danger">{{ $errors->first('is_utilities') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.is_utilities_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.linkCategory.fields.is_active') }}</label>
                    @foreach(App\Models\LinkCategory::IS_ACTIVE_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                            <input class="form-check-input" type="radio" id="is_active_{{ $key }}" name="is_active" value="{{ $key }}" {{ old('is_active', $linkCategory->is_active) === (string) $key ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if($errors->has('is_active'))
                        <span class="text-danger">{{ $errors->first('is_active') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.linkCategory.fields.is_active_helper') }}</span>
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
                                        xhr.open('POST', '{{ route('admin.link-categories.storeCKEditorImages') }}', true);
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
                                        data.append('crud_id', '{{ $linkCategory->id ?? 0 }}');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor1');
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
        Dropzone.options.pictureDropzone = {
            url: '{{ route('admin.link-categories.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function (file, response) {
                $('form').find('input[name="picture"]').remove()
                $('form').append('<input type="hidden" name="picture" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="picture"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @if(isset($linkCategory) && $linkCategory->picture)
                var file = {!! json_encode($linkCategory->picture) !!}
                this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, file.preview)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="picture" value="' + file.file_name + '">')
                this.options.maxFiles = this.options.maxFiles - 1
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
