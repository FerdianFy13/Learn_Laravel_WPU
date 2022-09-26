<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dahsboard Controller
    public function index()
    {
        return view('dashboard.dashboard', [
            "title" => "Dashboard",
        ]);
    }
}
