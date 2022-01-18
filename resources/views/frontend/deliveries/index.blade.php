@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Manage Deliveries</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <table id="deliveries_datatable" class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="text-center">Phone Number</th>
                        <th class="text-center">Campaign</th>
                        <th class="text-center">Channel</th>
                        <th class="text-center">Time</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
<script>
    function getDeliveriesDatatable() {
        var table = $("#deliveries_datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": {
                "url": site_url + '/deliveries/getDeliveriesDatatable',
                "type": "POST",
                "data": {'_token': csrf_token}
            },
            "pagingType": "numbers",
            "dom": "<'row'<'col-sm-3'f><' text-center'B><'col-sm-7 text-right'l><'col-sm-2 addButton'>><'row'<'col-sm-12'tr>><'row'<'col-sm-4'i><'col-sm-8'p>>",
            "buttons": [],
            "columns": [
                {targets: "0", className: "text-center", data: 'DT_RowIndex', orderable: false, searchable: false},
                {targets: "1", className: "text-center", data: 'phone_number'},
                {targets: "2", className: "text-center", data: 'campaign_name'},
                {targets: "3", className: "text-center", data: 'channel_representation'},
                {targets: "4", className: "text-center", data: 'delivery_time'},
                {targets: "5", className: "text-center", data: 'status'},
                {targets: "6", className: "text-center", data: 'type_representation'},
                {
                    targets: "7",
                    sortable: false,
                    searchable: false,
                    className: "text-center",
                    data: null,
                    "render": function (data, type, full, meta) {
                        return '<a title="View" href="' + site_url + '/deliveries/delivery_details/' + data['delivery_hash'] + '" class="btn btn-sm btn-primary" role="button">View</a>\n\
                                <a onclick="deleteDelivery(\'' + data['delivery_hash'] + '\')" title="Delete" class="btn btn-sm btn-danger" role="button">Delete</a>';
                    }

                },
            ],
            "order": [[0, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        });
    }

    function deleteDelivery(delivery_hash) {
        bootbox.confirm("Are you sure you want to delete this delivery data?", function (result) {
            if (result) {
                $.post(site_url + "/deliveries/deleteDelivery", {'_token': csrf_token, delivery_hash: delivery_hash}, function (data, status) {
                    if (data == '1') {
                        flashMessage('Delivery Data Deleted Successfully', 'success');
                        $('#deliveries_datatable').DataTable().ajax.reload();
                    } else {
                        flashMessage('Delivery Data Deletion Failed', 'error');
                    }
                });
            }
        });
    }

    $(document).ready(function () {
        getDeliveriesDatatable();
    });
</script>
<link src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.css')}}">
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatable_buttons.js')}}"></script>
@endsection


