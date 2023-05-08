<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'agent_name' => ['required'],
            'company_name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['required'],
        ]);
        $form = \App\Models\Request::create($data);
        return redirect('/');
    }
    public function delete(\App\Models\Request $request)
    {
        $request->delete();
        return redirect('/dashboard');
    }
}
