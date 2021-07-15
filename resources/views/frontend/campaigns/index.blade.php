@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Manage Campaigns</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <table id="campaigns_datatable" class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Channel</th>
                        <th class="text-center">Prefix Brand Code</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
<script>
    function getCampaignsDatatable() {
        var table = $("#campaigns_datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "ajax": {
                "url": site_url + '/campaigns/getCampaignsDatatable',
                "type": "POST",
                "data": {'_token': csrf_token}
            },
            "pagingType": "numbers",
            "dom": "<'row'<'col-sm-3'f><' text-center'B><'col-sm-7 text-right'l><'col-sm-2 addButton'>><'row'<'col-sm-12'tr>><'row'<'col-sm-4'i><'col-sm-8'p>>",
            "buttons": [],
            "columns": [
                {targets: "0", className: "text-center", data: 'DT_RowIndex'},
                {targets: "1", className: "text-center", data: 'campaign_name'},
                {targets: "2", className: "text-center", data: 'channel_representation'},
                {targets: "3", className: "text-center", data: 'prefix_brand_code_representation'},
                {
                    targets: "4",
                    sortable: false,
                    searchable: false,
                    className: "text-center",
                    data: null,
                    "render": function (data, type, full, meta) {
                        return '<a class="btn btn-sm btn-info" href="' + site_url + '/campaigns/duplicate_campaign/' + data['campaign_hash'] + '">Duplicate Campaign</a>\
                                <a title="Test Campaign" href="' + site_url + '/campaigns/test_campaign/' + data['campaign_hash'] + '" class="btn btn-sm btn-warning" role="button">Test</a>\n\
                                <a title="Live Campaign" href="' + site_url + '/campaigns/live_campaign/' + data['campaign_hash'] + '" class="btn btn-sm btn-success" role="button">Live</a>\n\
                                <a title="Edit" href="' + site_url + '/campaigns/campaign/' + data['campaign_hash'] + '" class="btn btn-sm btn-primary" role="button">Edit</a>\n\
                                <a onclick="deleteCampaign(\'' + data['campaign_hash'] + '\')" title="Delete" class="btn btn-sm btn-danger" role="button">Delete</a>';
                    }

                },
            ],
            "order": [[0, 'asc']],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        });
        new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    text: 'Add Campaign',
                    className: 'btn btn-primary btn-sm',
                    action: function (e, dt, node, config) {
                        window.location.href = site_url + '/campaigns/campaign';
                    }
                }
            ]
        });
        table.buttons(1, null).container().appendTo('.addButton');
    }

    function deleteCampaign(campaign_hash) {
        bootbox.confirm("Are you sure you want to delete this campaign? <br> <span class='text-danger'>Note</span>: <strong>All records related to this campaign will also be deleted.</strong>", function (result) {
            if (result) {
                $.post(site_url + "/campaigns/deleteCampaign", {'_token': csrf_token, campaign_hash: campaign_hash}, function (data, status) {
                    if (data == '1') {
                        flashToastSuccess('Campaign Deleted Successfully');
                        $('#campaigns_datatable').DataTable().ajax.reload();
                    } else {
                        flashToastError(data);
                    }
                });
            }
        });
    }

    $(document).ready(function () {
        getCampaignsDatatable();
    });
</script>
<link src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.css')}}">
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('frontend/theme/plugins/datatables/datatable_buttons.js')}}"></script>
@endsection


