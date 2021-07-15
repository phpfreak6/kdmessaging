@extends('layouts/master_layout')
@section('content')
<section class="content-header">  
    <h1>Manage Brands</h1>
</section>
<section class="content">   
    <div class="box">   
        <div class="box-body">     
            <table id="brands_datatable" class="table table-responsive table-striped table-bordered"> 
                <thead>        
                    <tr>      
                        <th class="">ID</th>    
                        <th class="text-center">Name</th>  
                        <th class="text-center">Code Name</th>    
                        <th class="text-center">Short Code</th>   
                        <th class="text-center">Daily Limit</th>    
                        <th class="text-center">Monthly Limit</th>   
                        <th class="text-center">Redirect URL</th>    
                        <th class="text-center">Actions</th>        
                    </tr>        
                </thead>    
            </table>       
        </div>  
    </div>
</section>
<script>
    function getBrandsDatatable() {
        var table = $("#brands_datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": {
                "url": site_url + '/admin/brands/getBrandsDatatable',
                "type": "POST",
                "data": {'_token': csrf_token}},
            "pagingType": "numbers",
            "dom": "<'row'<'col-sm-3'f><' text-center'B><'col-sm-7 text-right'l><'col-sm-2 addButton'>><'row'<'col-sm-12'tr>><'row'<'col-sm-4'i><'col-sm-8'p>>",
            "buttons": [],
            "columns": [
                {targets: "0", className: "text-center", data: 'DT_RowIndex'},
                {targets: "1", className: "text-center", data: 'brand_name'},
                {targets: "2", className: "text-center", data: 'brand_code_name'},
                {targets: "3", className: "text-center", data: 'short_code'},
                {targets: "4", className: "text-center", data: 'daily_sending_limit'},
                {targets: "5", className: "text-center", data: 'monthly_sending_limit'},
                {targets: "6", className: "text-center", data: 'campaign_redirect_url'},
                {targets: "7", sortable: false, searchable: false, className: "text-center", data: null,
                    "render": function (data, type, full, meta) {
                        return '<a title="View" href="' + site_url + '/admin/brands/brand-details/' + data['id'] + '" class="btn btn-sm btn-primary" role="button">View</a>\n\
                                <a title="Edit" href="' + site_url + '/admin/brands/brand/' + data['id'] + '" class="btn btn-sm btn-primary" role="button">Edit</a>\n\
                                <a title="Delete" onclick="deleteBrand(' + data['id'] + ')" class="btn btn-sm btn-danger" role="button">Delete</a>';
                    }}, ], "order": [[0, 'asc']], "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], });

        new $.fn.dataTable.Buttons(table, {buttons: [{text: 'Add Brand', className: 'btn btn-primary btn-sm', action: function (e, dt, node, config) {
                        window.location.href = site_url + '/admin/brands/brand';
                    }}
            ]});

        table.buttons(1, null).container().appendTo('.addButton');
    }
    function deleteBrand(id) {
        var brandDeleteText = 'Are you sure you want to delete this brand?\n\
                               <UL>\n\
                                    <LI>All associated users will be deleted. \n\
                                    <LI>All associated campaigns will be deleted. \n\
                                    <LI>All associated message delivery data will be deleted.\n\
                                    <LI>All associated message delivery clicks data will be deleted.\n\
                                    <LI>All associated lists and list phone numbers will be deleted.\n\
                                    <LI><p style="text-align:justify;">Twilio Subaccount will be marked as closed.<br>When you close a subaccount, Twilio will release all phone numbers assigned to it and shut it down completely. You cannot ever use a closed account to make and receive phone calls or send and receive SMS messages. It is closed, gone, kaput. You cannot reopen a closed account.<br>If you have enabled automatic deletion of closed subaccounts through the twilio Subaccounts settings page, Twilio will delete all subaccount data 30 days after closure including previously closed subaccounts and those subaccounts will no longer appear on the Twilio Console.</p>\n\
                               </UL><br>\n\
                                Note : <span class="text-danger"><strong>These actions cannot be reversed.</strong></span>';
        bootbox.confirm(brandDeleteText, function (result) {
            if (result) {
                $.post(
                        site_url + "/admin/brands/deleteBrand",
                        {'_token': csrf_token, id: id},
                        function (data, status) {
                            if (data == '1') {
                                flashToastSuccess('Brand Deleted Successfully');
                                $('#brands_datatable').DataTable().ajax.reload();
                            } else {
                                flashToastError(data);
                            }
                        });
            }
        });
    }
    $(document).ready(function () {
        getBrandsDatatable();
    });</script>
<link src="{{ URL::asset('admin/theme/plugins/datatables/datatables.min.css')}}">
<script src="{{ URL::asset('admin/theme/plugins/datatables/datatables.min.js')}}">
</script><script src="{{ URL::asset('admin/theme/plugins/datatables/datatable_buttons.js')}}"></script>
@endsection