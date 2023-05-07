<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function index()
    {
        return view('main');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'agent_name' => ['required'],
            'company_name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['required'],
        ]);
        $form = \App\Models\Request::create($data);
    }
    public function events()
    {

        return view('events');
    }
}
