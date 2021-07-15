@extends('layouts/master_layout')
@section('content')
<section class="content-header"> 
    <h1>Manage Users</h1>
</section>
<section class="content"> 
    <div class="box">    
        <div class="box-body">    
            <table id="users_datatable" class="table table-responsive table-striped table-bordered">     
                <thead>          
                    <tr>       
                        <th class="">ID</th>        
                        <th class="text-center">Email</th>    
                        <th class="text-center">Name</th> 
                        <th class="text-center">Brand</th>    
                        <th class="text-center">Type</th>        
                        <th class="text-center">Actions</th>      
                    </tr>           
                </thead>   
            </table>     
        </div>  
    </div>
</section>

<script>
    function getUsersDatatable() {
        var table = $("#users_datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": {
                "url": site_url + '/admin/users/getUsersDatatable',
                "type": "POST",
                "data": {'_token': csrf_token}},
            "pagingType": "numbers",
            "dom": "<'row'<'col-sm-3'f><' text-center'B><'col-sm-7 text-right'l><'col-sm-2 addButton'>><'row'<'col-sm-12'tr>><'row'<'col-sm-4'i><'col-sm-8'p>>",
            "buttons": [],
            "columns": [
                {targets: "0", className: "text-center", data: 'DT_RowIndex'},
                {targets: "1", className: "text-center", data: 'email', },
                {targets: "2", className: "text-center", data: 'full_name'},
                {targets: "4", className: "text-center", data: 'brand_name'},
                {targets: "5", className: "text-center", data: 'type'},
                {targets: "6", sortable: false, searchable: false, className: "text-center", data: null, "render": function (data, type, full, meta) {
                        if (data['id'] !== '<?= Auth::user()->id ?>') {
                            return '<a data-rel="tooltip" data-original-title="Edit" href="' + site_url + '/admin/users/user/' + data['id'] + '" class="btn btn-sm btn-primary" role="button">Edit</a>\n\ \n\
                                               <a onclick="deleteUser(' + data['id'] + ')" data-rel="tooltip" data-original-title="Delete" class="btn btn-sm btn-danger" role="button">Delete</i></a>';
                        }
                        return '';
                    }}, {targets: "6", data: 'first_name', visible: false}, {targets: "7", data: 'last_name', visible: false}], "order": [[0, 'asc']], "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], });
        new $.fn.dataTable.Buttons(table, {buttons: [{text: 'Add User', className: 'btn btn-primary btn-sm', action: function (e, dt, node, config) {
                        window.location.href = site_url + '/admin/users/user';
                    }}]});
        table.buttons(1, null).container().appendTo('.addButton');
    }
    function deleteUser(id) {
        bootbox.confirm("Are you sure you want to delete this user?<br>Note : <span class='text-danger'><strong>This action cannot be reversed.</strong></span>", function (result) {
            if (result) {
                $.post(site_url + "/admin/users/deleteUser", {'_token': csrf_token, id: id}, function (data, status) {
                    if (data == '1') {
                        flashMessage('User Deleted Successfully', 'success');
                        $('#users_datatable').DataTable().ajax.reload();
                    } else {
                        flashMessage('User Deletion Failed', 'error');
                    }
                });
            }
        });
    }
    $(document).ready(function () {
        getUsersDatatable();
    });</script>
<link src="{{ URL::asset('admin/theme/plugins/datatables/datatables.min.css')}}">
<script src="{{ URL::asset('admin/theme/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('admin/theme/plugins/datatables/datatable_buttons.js')}}"></script>
@endsection