@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Delivery Clicks</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <table id="delivery_clicks_datatable" class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Phone Number</th>
                        <th class="text-center">Campaign</th>
                        <th class="text-center">Brand</th>
                        <th class="text-center">Click Count</th>
                        <th class="text-center">Click Time</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
<script>
    function getDeliveryClicksDatatable() {
        var table = $("#delivery_clicks_datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": {
                "url": site_url + '/delivery_clicks/getDeliveryClicksDatatable',
                "type": "POST",
                "data": {'_token': csrf_token}
            },
            "pagingType": "numbers",
            "dom": "<'row'<'col-sm-3'f><' text-center'B><'col-sm-7 text-right'l><'col-sm-2 addButton'>><'row'<'col-sm-12'tr>><'row'<'col-sm-4'i><'col-sm-8'p>>",
            "buttons": [],
            "columns": [
                {targets: "0", className: "text-center", data: 'DT_RowIndex'},
                {targets: "1", className: "text-center", data: 'first_name'},
                {targets: "2", className: "text-center", data: 'last_name'},
                {targets: "3", className: "text-center", data: 'phone_number'},
                {targets: "4", className: "text-center", data: 'campaign_name'},
                {targets: "5", className: "text-center", data: 'brand_name'},
                {targets: "6", className: "text-center", data: 'click_count'},
                {targets: "7", className: "text-center", data: 'created_at'},
                {
                    targets: "8",
                    sortable: false,
                    searchable: false,
                    className: "text-center",
                    data: null,
                    "render": function (data, type, full, meta) {
                        return '<a onclick="deleteDeliveryClick(\'' + data['delivery_click_hash'] + '\')" title="Delete" class="btn btn-sm btn-danger" role="button">Delete</a>';
                    }
                },
            ],
            "order": [[0, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        });
    }

    function deleteDeliveryClick(delivery_click_hash) {
        bootbox.confirm("Are you sure you want to delete this delivery click data?", function (result) {
            if (result) {
                $.post(site_url + "/delivery_clicks/deleteDeliveryClick", {'_token': csrf_token, delivery_click_hash: delivery_click_hash}, function (data, status) {
                    if (data == '1') {
                        flashMessage('Delivery Click Data Deleted Successfully', 'success');
                        $('#delivery_clicks_datatable').DataTable().ajax.reload();
                    } else {
                        flashMessage('Delivery Click Data Deletion Failed', 'error');
                    }
                });
            }
        });
    }

    $(document).ready(function () {
        getDeliveryClicksDatatable();
    });
</script>
<link src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.css')}}">
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatable_buttons.js')}}"></script>
@endsection


