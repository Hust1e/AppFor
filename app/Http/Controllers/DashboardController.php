<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = DB::table('requests')->get();

        return view('dashboard.requests', ['requests' => $data]);
    }
    public function events()
    {
        $data = DB::table('events')->get();

        return view('dashboard.events', ['events' => $data]);
    }
}
