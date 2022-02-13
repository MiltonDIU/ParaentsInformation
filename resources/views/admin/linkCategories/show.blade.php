@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.linkCategory.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.link-categories.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $linkCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.title') }}
                        </th>
                        <td>
                            {{ $linkCategory->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.content') }}
                        </th>
                        <td>
                            {!! $linkCategory->content !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.picture') }}
                        </th>
                        <td>
                            @if($linkCategory->picture)
                                <a href="{{ $linkCategory->picture->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $linkCategory->picture->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.external_link') }}
                        </th>
                        <td>
                            {{ $linkCategory->external_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.position') }}
                        </th>
                        <td>
                            {{ $linkCategory->position }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.page_name') }}
                        </th>
                        <td>
                            {{ App\Models\LinkCategory::PAGE_NAME_SELECT[$linkCategory->page_name] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.image_position') }}
                        </th>
                        <td>
                            {{ App\Models\LinkCategory::IMAGE_POSITION_SELECT[$linkCategory->image_position] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.is_utilities') }}
                        </th>
                        <td>
                            {{ App\Models\LinkCategory::IS_UTILITIES_RADIO[$linkCategory->is_utilities] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.linkCategory.fields.is_active') }}
                        </th>
                        <td>
                            {{ App\Models\LinkCategory::IS_ACTIVE_RADIO[$linkCategory->is_active] ?? '' }}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.link-categories.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{ trans('global.relatedData') }}
        </div>
        <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#link_category_links" role="tab" data-toggle="tab">
                    {{ trans('cruds.link.title') }}
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" role="tabpanel" id="link_category_links">
                @includeIf('admin.linkCategories.relationships.linkCategoryLinks', ['links' => $linkCategory->linkCategoryLinks])
            </div>
        </div>
    </div>

@endsection
