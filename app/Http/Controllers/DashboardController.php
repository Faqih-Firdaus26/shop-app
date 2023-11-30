<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->user()->roles == 'ADMIN') {
            return view('dashboardAdmin');
        } else {
            return view('dashboard');
        }
    }
}