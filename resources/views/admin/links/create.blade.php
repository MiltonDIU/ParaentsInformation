@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.link.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.links.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="title">{{ trans('cruds.link.fields.title') }}</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                    @if($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.link.fields.title_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="link">{{ trans('cruds.link.fields.link') }}</label>
                    <input class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}" type="text" name="link" id="link" value="{{ old('link', '') }}" required>
                    @if($errors->has('link'))
                        <span class="text-danger">{{ $errors->first('link') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.link.fields.link_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="link_categories">{{ trans('cruds.link.fields.link_category') }}</label>
                    <div style="padding-bottom: 4px">
                        <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                    </div>
                    <select class="form-control select2 {{ $errors->has('link_categories') ? 'is-invalid' : '' }}" name="link_categories[]" id="link_categories" multiple required>
                        @foreach($link_categories as $id => $link_category)
                            <option value="{{ $id }}" {{ in_array($id, old('link_categories', [])) ? 'selected' : '' }}>{{ $link_category }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('link_categories'))
                        <span class="text-danger">{{ $errors->first('link_categories') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.link.fields.link_category_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.link.fields.is_active') }}</label>
                    @foreach(App\Models\Link::IS_ACTIVE_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                            <input class="form-check-input" type="radio" id="is_active_{{ $key }}" name="is_active" value="{{ $key }}" {{ old('is_active', '1') === (string) $key ? 'checked' : '' }} required>
                            <label class="form-check-label" for="is_active_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if($errors->has('is_active'))
                        <span class="text-danger">{{ $errors->first('is_active') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.link.fields.is_active_helper') }}</span>
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
