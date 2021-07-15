@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Manage List Phone Numbers</h1>
    <h5>LIST - <?= $listArr['list_name']; ?></h5>
    <h5><strong>Note: Sample file for importing can be downloaded from <a href="<?= url('sample_file/sample_file.xlsx'); ?>" download>here</a></strong></h5>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <?= Form::hidden('list_hash', $list_hash, ['id' => 'list_hash']) ?>
            <table id="list_numbers_datatable" class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Phone Number</th>
                        <th class="text-center">Whatsapp Opt</th>
                        <!--<th class="text-center">Opted Out</th>-->
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
<?php // Form::file('excel_imported_file', ['id' => 'excel_imported_file', 'style' => 'display:none;']); ?>
<script>
    function getListNumbersDatatable() {
        var table = $("#list_numbers_datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": {
                "url": site_url + '/lists/getListNumbersDatatable',
                "type": "POST",
                "data": {'_token': csrf_token, 'list_hash': $('#list_hash').val()}
            },
            "pagingType": "numbers",
            "dom": "<'row'<'col-sm-3'f><' text-center'B><'col-sm-4 import_button'><'col-sm-3 text-right'l><'col-sm-2 addButton'>><'row'<'col-sm-12'tr>><'row'<'col-sm-4'i><'col-sm-8'p>>",
            "buttons": [],
            "columns": [
                {targets: "0", className: "text-center", data: 'DT_RowIndex'},
                {targets: "1", className: "text-center", data: 'first_name'},
                {targets: "2", className: "text-center", data: 'last_name'},
                {targets: "3", className: "text-center", data: 'phone_number'},
                {targets: "4", className: "text-center", data: 'whatsapp_opt_representation'},
                {
                    targets: "5",
                    sortable: false,
                    searchable: false,
                    className: "text-center",
                    data: null,
                    "render": function (data, type, full, meta) {
                        return '<a title="Edit" href="' + site_url + '/lists/list_number/' + $('#list_hash').val() + '/' + data['list_number_hash'] + '" class="btn btn-sm btn-primary" role="button"><i class="fa fa-pencil bigger-130"></i></a>\n\
                                <a onclick="deleteListPhoneNumber(\'' + data['list_number_hash'] + '\')" title="Delete" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash-o bigger-130"></i></a>';
                    }
                },
            ],
            "order": [[0, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        });
        new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    text: 'Add Phone Number',
                    className: 'btn btn-primary btn-sm',
                    action: function (e, dt, node, config) {
                        window.location.href = site_url + '/lists/list_number/' + $('#list_hash').val();
                    }
                }
            ]
        });
        new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    text: 'Import',
                    className: 'btn btn-primary btn-sm click_import',
                    action: function (e, dt, node, config) {

                    }
                }
            ]
        });
        table.buttons(1, null).container().appendTo('.addButton');
        table.buttons(2, null).container().appendTo('.import_button');
    }

    function deleteListPhoneNumber(list_number_hash) {
        bootbox.confirm("Are you sure you want to delete phone number from this list?", function (result) {
            if (result) {
                $.post(site_url + "/lists/deleteListPhoneNumber", {'_token': csrf_token, list_number_hash: list_number_hash}, function (data, status) {
                    if (data == '1') {
                        flashMessage('Phone Number Deleted Successfully', 'success');
                        $('#list_numbers_datatable').DataTable().ajax.reload();
                    } else {
                        flashMessage('Phone Number Deletion Failed', 'error');
                    }
                });
            }
        });
    }

    function onclickImport() {
        $('.click_import').click(function () {
            $('body').append('<input id="excel_imported_file" style="display:none;" name="excel_imported_file" type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">');
            $('#excel_imported_file').trigger('click');
            $("#excel_imported_file").unbind('change');
            $("#excel_imported_file").change(function () {
                if ($('#excel_imported_file').val() !== '') {
                    var filename = $("#excel_imported_file").val();
                    var extension = filename.replace(/^.*\./, '');
                    var extensionsArr = ['xlsx', 'xlsm', 'xltx', 'xltm', 'xls', 'xlt', 'ods', 'ots', 'slk', 'xml', 'gnumeric', 'htm', 'html', 'csv', 'tsv'];
                    if (extensionsArr.includes(extension)) {
                        bootbox.prompt({
                            title: "Are you sure you want to import this file?",
                            value: ['1'],
                            inputType: 'checkbox',
                            inputOptions: [{
                                    text: 'Send Whatsapp Opt In Message',
                                    value: '1'
                                }],
                            callback: function (result) {
                                if (result) {
                                    var uploaded_file = $('#excel_imported_file').prop('files')[0];
                                    var formData = new FormData();
                                    formData.append('list_hash', $('#list_hash').val());
                                    formData.append('_token', csrf_token);
                                    formData.append('uploaded_file', uploaded_file);
                                    formData.append('send_whatsapp_optin_message', $('.bootbox-input').is(':checked'));
                                    $.ajax({
                                        url: site_url + '/lists/uploadExcelFile',
                                        data: formData,
                                        processData: false,
                                        contentType: false,
                                        type: 'POST',
                                        beforeSend: function () {
                                            blockScreen();
                                        },
                                        success: function (data) {
                                            unblockScreen();
                                            if (data == 'list_updated') {
                                                flashMessage('List Updated Successfully', 'success');
                                            } else if (data == 'no_new_records') {
                                                flashMessage('No New Records Found In Uploaded Spreadsheet', 'success');
                                            } else {
                                                toastr.options = {"closeButton": true, "timeOut": "0", "extendedTimeOut": "0"};
                                                toastr.error(data);
                                            }
                                            $('#list_numbers_datatable').DataTable().ajax.reload();
                                            $('#excel_imported_file').remove();
                                        }
                                    });
                                } else {
                                    $('#excel_imported_file').remove();
                                }
                            }
                        });
                    } else {
                        flashMessage('Please Upload A Valid Excel File', 'error');
                        return false;
                    }

                } else {
                    $('#excel_imported_file').remove();
                }

            });
        });
    }



    $(document).ready(function () {
        getListNumbersDatatable();
        onclickImport();
    }
    );
</script>
<link src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.css')}}">
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatable_buttons.js')}}"></script>
@endsection


