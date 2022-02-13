@extends('layouts.admin')
@section('content')
    @can('link_category_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.link-categories.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.linkCategory.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.linkCategory.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-LinkCategory">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.linkCategory.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.linkCategory.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.linkCategory.fields.picture') }}
                        </th>
                        <th>
                            {{ trans('cruds.linkCategory.fields.external_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.linkCategory.fields.position') }}
                        </th>
                        <th>
                            {{ trans('cruds.linkCategory.fields.page_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.linkCategory.fields.image_position') }}
                        </th>
                        <th>
                            {{ trans('cruds.linkCategory.fields.is_utilities') }}
                        </th>
                        <th>
                            {{ trans('cruds.linkCategory.fields.is_active') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($linkCategories as $key => $linkCategory)
                        <tr data-entry-id="{{ $linkCategory->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $linkCategory->id ?? '' }}
                            </td>
                            <td>
                                {{ $linkCategory->title ?? '' }}
                            </td>
                            <td>
                                @if($linkCategory->picture)
                                    <a href="{{ $linkCategory->picture->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $linkCategory->picture->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $linkCategory->external_link ?? '' }}
                            </td>
                            <td>
                                {{ $linkCategory->position ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\LinkCategory::PAGE_NAME_SELECT[$linkCategory->page_name] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\LinkCategory::IMAGE_POSITION_SELECT[$linkCategory->image_position] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\LinkCategory::IS_UTILITIES_RADIO[$linkCategory->is_utilities] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\LinkCategory::IS_ACTIVE_RADIO[$linkCategory->is_active] ?? '' }}
                            </td>
                            <td>
                                @can('link_category_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.link-categories.show', $linkCategory->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('link_category_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.link-categories.edit', $linkCategory->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('link_category_delete')
                                    <form action="{{ route('admin.link-categories.destroy', $linkCategory->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('link_category_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.link-categories.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: { ids: ids, _method: 'DELETE' }})
                            .done(function () { location.reload() })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [[ 1, 'desc' ]],
                pageLength: 100,
            });
            let table = $('.datatable-LinkCategory:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection
