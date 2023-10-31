<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show User form
    public function userForm()
    {
        return view('user-form');
    }

    // Show user list
    public function userList()
    {
        return view('user-list');
    }
}
