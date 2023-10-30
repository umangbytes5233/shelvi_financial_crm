<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function authLogin()
    {

        return redirect()->route('dashboard');
    }
}
