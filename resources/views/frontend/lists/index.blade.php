@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Manage Lists</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <table id="lists_datatable" class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Brand</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
<script>
    function getListsDatatable() {
        var table = $("#lists_datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": {
                "url": site_url + '/lists/getListsDatatable',
                "type": "POST",
                "data": {'_token': csrf_token}
            },
            "pagingType": "numbers",
            "dom": "<'row'<'col-sm-3'f><' text-center'B><'col-sm-7 text-right'l><'col-sm-2 addButton'>><'row'<'col-sm-12'tr>><'row'<'col-sm-4'i><'col-sm-8'p>>",
            "buttons": [],
            "columns": [
                {targets: "0", className: "text-center", data: 'DT_RowIndex'},
                {targets: "1", className: "text-center", data: 'list_name'},
                {targets: "2", className: "text-center", data: 'brand_name'},
                {
                    targets: "3",
                    sortable: false,
                    searchable: false,
                    className: "text-center",
                    data: null,
                    "render": function (data, type, full, meta) {
                        return '<a target="_blank" title="List Phone Numbers" href="' + site_url + '/lists/manage_list_numbers/' + data['list_hash'] + '" class="btn btn-sm btn-success" role="button">Phone Numbers</a>\n\
                                <a title="Edit" href="' + site_url + '/lists/list/' + data['list_hash'] + '" class="btn btn-sm btn-primary" role="button">Edit</a>\n\
                                <a onclick="deleteList(\'' + data['list_hash'] + '\')" title="Delete" class="btn btn-sm btn-danger" role="button">Delete</a>';
                    }

                },
            ],
            "order": [[0, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        });
        new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    text: 'Add List',
                    className: 'btn btn-primary btn-sm',
                    action: function (e, dt, node, config) {
                        window.location.href = site_url + '/lists/list';
                    }
                }
            ]
        });
        table.buttons(1, null).container().appendTo('.addButton');
    }

    function deleteList(list_hash) {
        bootbox.confirm("Are you sure you want to delete this list?<br>\n\
                         <ul>\n\
                            <li>All phone numbers associated to this list will also be deleted.</li>\n\
                        </ul>\n\
                        Note : <span class='text-danger'><strong>This action cannot be reversed.</strong></span>", function (result) {
            if (result) {
                $.post(site_url + "/lists/deleteList", {'_token': csrf_token, list_hash: list_hash}, function (data, status) {
                    if (data == '1') {
                        flashToastSuccess('List Deleted Successfully');
                        $('#lists_datatable').DataTable().ajax.reload();
                    } else {
                        flashToastError(data);
                    }
                });
            }
        });
    }

    $(document).ready(function () {
        getListsDatatable();
    });
</script>
<link src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.css')}}">
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatable_buttons.js')}}"></script>
@endsection


