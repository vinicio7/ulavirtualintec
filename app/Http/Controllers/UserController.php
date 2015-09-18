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

    public function login(Request $request)
    {
        $cadena = 'usuario: ' . $request->id;
        $pass = 'password: ' . $request->password;
        dd($cadena . " " . $pass);
    }
}
