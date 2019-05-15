<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function register(Request $req) {
        return view('users.register');
    }
}
