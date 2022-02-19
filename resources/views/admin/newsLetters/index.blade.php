@extends('layouts.admin')
@section('content')
    @can('news_letter_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.news-letters.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.newsLetter.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.newsLetter.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-NewsLetter">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.newsLetter.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.newsLetter.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.newsLetter.fields.external_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.newsLetter.fields.external_link_text') }}
                        </th>
                        <th>
                            {{ trans('cruds.newsLetter.fields.is_active') }}
                        </th>
                        <th>
                            {{ trans('cruds.newsLetter.fields.picture') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($newsLetters as $key => $newsLetter)
                        <tr data-entry-id="{{ $newsLetter->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $newsLetter->id ?? '' }}
                            </td>
                            <td>
                                {{ $newsLetter->title ?? '' }}
                            </td>
                            <td>
                                {{ $newsLetter->external_link ?? '' }}
                            </td>
                            <td>
                                {{ $newsLetter->external_link_text ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\NewsLetter::IS_ACTIVE_RADIO[$newsLetter->is_active] ?? '' }}
                            </td>
                            <td>
                                @foreach($newsLetter->picture as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $media->getUrl('thumb') }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                @can('news_letter_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.news-letters.show', $newsLetter->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('news_letter_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.news-letters.edit', $newsLetter->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('news_letter_delete')
                                    <form action="{{ route('admin.news-letters.destroy', $newsLetter->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
            @can('news_letter_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.news-letters.massDestroy') }}",
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
            let table = $('.datatable-NewsLetter:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection
