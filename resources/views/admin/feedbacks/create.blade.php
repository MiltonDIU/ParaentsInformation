@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.feedback.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.feedbacks.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="feedback_category_id">{{ trans('cruds.feedback.fields.feedback_category') }}</label>
                    <select class="form-control select2 {{ $errors->has('feedback_category') ? 'is-invalid' : '' }}" name="feedback_category_id" id="feedback_category_id" required>
                        @foreach($feedback_categories as $id => $entry)
                            <option value="{{ $id }}" {{ old('feedback_category_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('feedback_category'))
                        <div class="invalid-feedback">
                            {{ $errors->first('feedback_category') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.feedback.fields.feedback_category_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="content">{{ trans('cruds.feedback.fields.content') }}</label>
                    <input class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" type="text" name="content" id="content" value="{{ old('content', '') }}" required>



                    @if($errors->has('content'))
                        <div class="invalid-feedback">
                            {{ $errors->first('content') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.feedback.fields.content_helper') }}</span>
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
