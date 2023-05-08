<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function index()
    {
        return view('main');
    }
    public function events()
    {
        return view('events');
    }
    public function company()
    {
        return view('site.company');
    }
}
