<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomingMessageController extends Controller
{
    function index()
    {
        return view('frontend/incoming-messages/index');
    }

    function getIncomingMessagesDatatable(Request $request)
    {
    }
}
