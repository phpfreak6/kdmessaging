@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Incoming Messages</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <input type="hidden" id="whatsapp_phone_number" value="<?= $brandArr['whatsapp_phone_number'] ?>">
            <input type="hidden" id="short_code" value="<?= $brandArr['short_code'] ?>">
            <div class="table-header text-right">
                <button class="btn btn-sm btn-primary" onclick="refreshIncomingMessagesDatatable()"><i class="fa fa-refresh"></i></button>
            </div>
            <table id="incoming_messages_datatable" class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="text-center">Message ID</th>
                        <th class="text-center">From</th>
                        <th class="text-center">To</th>
                        <th class="text-center">Segments</th>
                        <th class="text-center">Platform</th>
                        <th class="text-center">File</th>
                        <th class="text-center">Received At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
<script>
    function refreshIncomingMessagesDatatable() {
        $('#incoming_messages_datatable').DataTable().ajax.reload();
    }

    function getIncomingMessagesDatatable() {
        var whatsapp_phone_number = $('#whatsapp_phone_number').val();
        var short_code = $('#short_code').val();
        var table = $("#incoming_messages_datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": {
                "url": site_url + '/incoming-messages/getIncomingMessagesDatatable',
                "type": "POST",
                "data": {
                    '_token': csrf_token,
                    'whatsapp_phone_number': whatsapp_phone_number,
                    'short_code': short_code
                }
            },
            "pagingType": "numbers",
            "dom": "<'row'<'col-sm-3'f><' text-center'B><'col-sm-4 import_button'><'col-sm-3 text-right'l><'col-sm-2 addButton'>><'row'<'col-sm-12'tr>><'row'<'col-sm-4'i><'col-sm-8'p>>",
            "buttons": [],
            "columns": [{
                    targets: "0",
                    className: "text-center",
                    data: 'DT_RowIndex'
                },
                {
                    targets: "1",
                    className: "text-center",
                    data: 'message_id'
                },
                {
                    targets: "2",
                    className: "text-center",
                    data: 'from_phone'
                },
                {
                    targets: "3",
                    className: "text-center",
                    data: 'to_phone'
                },
                {
                    targets: "4",
                    className: "text-center",
                    data: 'segments'
                },
                {
                    targets: "5",
                    className: "text-center",
                    data: 'platform'
                },
                {
                    targets: "6",
                    className: "text-center",
                    data: 'file_url_representation',
                    "defaultContent": "",
                },
                {
                    targets: "7",
                    className: "text-center",
                    data: 'created_at',
                    "defaultContent": "",
                },
                {
                    targets: "8",
                    sortable: false,
                    searchable: false,
                    className: "text-center",
                    data: null,
                    "render": function(data, type, full, meta) {
                        return `<a title="View" href="${site_url}/incoming-messages/incoming-message-detail/${data['id']}" class="btn btn-sm btn-primary" role="button"><i class="fa fa-eye bigger-130"></i></a>`;
                    }
                },
            ],
            "order": [
                [0, 'asc']
            ],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
        });
    }

    $(document).ready(function() {
        getIncomingMessagesDatatable();
    });
</script>
<link src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.css')}}">
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatable_buttons.js')}}"></script>
@endsection