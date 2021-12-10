<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Models\IncomingMessage;
use Auth;
use DB;


class IncomingMessageController extends Controller
{
    function index()
    {
        $dataArr['brandArr'] = Brand::find(Auth::user()->brand_id);
        return view('frontend/incoming-messages/index', $dataArr);
    }

    function viewMessageDetail($incoming_message_id)
    {
        $incoming_message_id = decodeId($incoming_message_id);
        $dataArr['incomingMessageArr'] = IncomingMessage::find($incoming_message_id);
        return view('frontend/incoming-messages/incoming-message-detail', $dataArr);
    }

    function getIncomingMessagesDatatable(Request $request)
    {
        return datatables()->of(
            DB::table('incoming_messages')
                ->select('*')
                ->where('to_phone', '=', $request->whatsapp_phone_number)
                ->orWhere('to_phone', '=', $request->short_code)
                ->latest()
                ->get()
        )
            ->addIndexColumn()
            ->addColumn('file_url_representation', function ($query) {
                if (!empty($query->file_url)) {
                    return '<a target="_blank" title="Download" href="' . $query->file_url . '" class="btn btn-sm btn-success" role="button"><i class="fa fa-download bigger-130"></i></a>';
                }
            })
            ->editColumn('id', function ($query) {
                return encodeId($query->id);
            })
            ->rawColumns(['file_url_representation'])
            ->make(true);
    }
}
