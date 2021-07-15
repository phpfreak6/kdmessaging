@extends('layouts/master_layout')
@section('content')
<section class="content-header">  
    <h1>Manage Cron Requests</h1>
</section>
<section class="content">   
    <div class="box">   
        <div class="box-body">
            <div class="table-header text-right">
                <button class="btn btn-sm btn-primary" onclick="refreshCronRequestDatatable()"><i class="fa fa-refresh"></i></button>
            </div>
            <table id="cron_requests_datatable" class="table table-responsive table-striped table-bordered"> 
                <thead>        
                    <tr>      
                        <th class="">ID</th>    
                        <th class="text-center">Marketer</th>  
                        <th class="text-center">Brand</th>    
                        <th class="text-center">Campaign</th>   
                        <th class="text-center">List</th>    
                        <th class="text-center">Message Type</th>    
                        <th class="text-center">Type</th>   
                        <th class="text-center">Status</th>    
                        <th class="text-center">Request Time</th>        
                    </tr>        
                </thead>    
            </table>       
        </div>  
    </div>
</section>
<script>
    function refreshCronRequestDatatable() {
        $('#cron_requests_datatable').DataTable().ajax.reload();
    }

    function getCronRequestsDatatable() {
        var table = $("#cron_requests_datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": {
                "url": site_url + '/admin/cron-requests/getCronRequestsDatatable',
                "type": "POST",
                "data": {'_token': csrf_token}},
            "pagingType": "numbers",
            "dom": "<'row'<'col-sm-3'f><' text-center'B><'col-sm-7 text-right'l><'col-sm-2 addButton'>><'row'<'col-sm-12'tr>><'row'<'col-sm-4'i><'col-sm-8'p>>",
            "buttons": [],
            "columns": [
                {targets: "0", className: "text-center", data: 'DT_RowIndex'},
                {targets: "1", className: "text-center", data: 'first_name'},
                {targets: "2", className: "text-center", data: 'brand_name'},
                {targets: "3", className: "text-center", data: 'campaign_name'},
                {targets: "4", className: "text-center", data: 'list_name'},
                {targets: "5", className: "text-center", data: 'message_type'},
                {targets: "6", className: "text-center", data: 'type'},
                {targets: "7", sortable: false, searchable: false, className: "text-center", data: null,
                    "render": function (data, type, full, meta) {
                        if (data['status'] == <?= CRON_JOB_QUEUED ?>) {
                            return 'QUEUED';
                        }
                        if (data['status'] == <?= CRON_JOB_PROGRESSING ?>) {
                            return 'PROGRESSING';
                        }
                        if (data['status'] == <?= CRON_JOB_COMPLETED ?>) {
                            return 'COMPLETED';
                        }
						if (data['status'] == <?= CRON_JOB_COMPLETED_WITH_ERRORS ?>) {
                            return 'COMPLETED WITH ERROR';
                        }
                    }
                },
                {targets: "6", className: "text-center", data: 'created_at'},
            ],
            "order": [[0, 'asc']], "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], });
    }

    $(document).ready(function () {
        getCronRequestsDatatable();
    });
</script>
<link src="{{ URL::asset('admin/theme/plugins/datatables/datatables.min.css')}}">
<script src="{{ URL::asset('admin/theme/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('admin/theme/plugins/datatables/datatable_buttons.js')}}"></script>
@endsection