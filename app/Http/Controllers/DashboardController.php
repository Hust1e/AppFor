<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = DB::table('requests')->get();

        return view('dashboard', ['requests' => $data]);
    }
    public function store()
    {

    }
}
