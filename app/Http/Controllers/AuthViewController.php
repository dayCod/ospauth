<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthViewController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }
}
