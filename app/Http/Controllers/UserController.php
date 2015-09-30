<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        return view('layouts.main');
    }

    public function main()
    {
        return view('layouts.main');
    }


}
