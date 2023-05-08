<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function store(StoreLoginRequest $request)
    {
        $credentials = $request->only('name', 'password');
        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }
        return view('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
