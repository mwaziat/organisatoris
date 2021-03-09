<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
        $data = [
            'webTitle' => 'My Organisasi',
            'title'     => 'Login'
        ];
        return view('login.login', $data);
    }

    public function forget()
    {
        # code...
    }
}
