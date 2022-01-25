@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">My Inventory</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-head">
                                                <header></header>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-scrollable">
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-checkable order-column valign-middle  center datatable-showroom"
                                                        id="example4">
                                                        <thead>
                                                            <tr class="text-uppercase">
                                                                <th>
                                                                    Brand Name
                                                                </th>
                                                                <th>
                                                                    Make
                                                                </th>
                                                                <th>
                                                                    Model
                                                                </th>
                                                                <th>
                                                                    Manufacture Year
                                                                </th>
                                                                <th>
                                                                    Price
                                                                </th>
                                                                <th>
                                                                    {{ trans('cruds.inventory.fields.interior_color') }}
                                                                </th>
                                                                <th>
                                                                    {{ trans('cruds.inventory.fields.exterior_color') }}
                                                                </th>
                                                                <th>
                                                                    {{ trans('cruds.inventory.fields.pictures') }}
                                                                </th>
                                                                <th>
                                                                    Action
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($inventories as $key => $inventory)
                                                                <tr class="odd gradeX">
                                                                    <td>
                                                                        {{ $inventory->brand_name ?? '' }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $inventory->make ?? '' }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $inventory->model ?? '' }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $inventory->manufacture_year ?? '' }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $inventory->price ?? '' }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $inventory->interior_color ?? '' }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $inventory->exterior_color ?? '' }}
                                                                    </td>
                                                                    <td>
                                                                        @foreach ($inventory->pictures as $key => $media)
                                                                            <a href="{{ $media->getUrl() }}"
                                                                                target="_blank"
                                                                                style="display: inline-block">
                                                                                <img src="{{ $media->getUrl('thumb') }}">
                                                                            </a>
                                                                        @endforeach
                                                                    </td>
                                                                    <td>
                                                                        @can('inventory_show')
                                                                            <a class="btn btn-xs btn-primary" href="{{ route('admin.inventories.show', $inventory->id) }}">
                                                                                {{ trans('global.view') }}
                                                                            </a>
                                                                        @endcan
                                                                            <br>
                                                                        @can('inventory_edit')
                                                                            <a class="btn btn-xs btn-info" href="">
                                                                                {{ trans('global.edit') }}
                                                                            </a>
                                                                            {{-- {{ route('admin.inventories.edit', $inventory->id) }} --}}
                                                                        @endcan
                                                                            <br>
                                                                        @can('inventory_delete')
                                                                            <form
                                                                                action="{{ route('admin.inventories.destroy', $inventory->id) }}"
                                                                                method="POST"
                                                                                onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                                                                style="display: inline-block;">
                                                                                <input type="hidden" name="_method"
                                                                                    value="DELETE">
                                                                                <input type="hidden" name="_token"
                                                                                    value="{{ csrf_token() }}">
                                                                                <input type="submit"
                                                                                    class="btn btn-xs btn-danger"
                                                                                    value="{{ trans('global.delete') }}">
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('inventory_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.inventories.massDestroy') }}",
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
                order: [
                    [2, 'asc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-Inventory:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
@endsection
