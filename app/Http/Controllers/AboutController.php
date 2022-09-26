<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    // About Controller
    public function index()
    {
        return view('about', [
            "titles" => "Welcome",
            "active" => "about",
            "title" => "About",
        ]);
    }
}