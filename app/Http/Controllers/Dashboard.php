<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $data = [
            'webTitle' => 'My Organisasi',
            'title'     => 'Dashboard'
        ];
        return view('admin.dashboard.dashboard', $data);
    }
}
