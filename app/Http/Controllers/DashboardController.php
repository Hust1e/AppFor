<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show_requests()
    {
        $data = DB::table('requests')->get();

        return view('dashboard', ['requests' => $data]);
    }
    public function create()
    {

    }
}
