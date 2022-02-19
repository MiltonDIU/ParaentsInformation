@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.newsLetter.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.news-letters.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.newsLetter.fields.id') }}
                        </th>
                        <td>
                            {{ $newsLetter->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsLetter.fields.title') }}
                        </th>
                        <td>
                            {{ $newsLetter->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsLetter.fields.external_link') }}
                        </th>
                        <td>
                            {{ $newsLetter->external_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsLetter.fields.external_link_text') }}
                        </th>
                        <td>
                            {{ $newsLetter->external_link_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsLetter.fields.content') }}
                        </th>
                        <td>
                            {!! $newsLetter->content !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsLetter.fields.is_active') }}
                        </th>
                        <td>
                            {{ App\Models\NewsLetter::IS_ACTIVE_RADIO[$newsLetter->is_active] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsLetter.fields.picture') }}
                        </th>
                        <td>
                            @foreach($newsLetter->picture as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.news-letters.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
