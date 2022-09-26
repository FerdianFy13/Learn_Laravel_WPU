<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('/home', [
            "title" => "Home",
            "active" => "home",
            "name" => "Ferdian Firmansyah",
            "email" => "ferdianfy13@gmail.com",
            "school" => "Politeknik Negeri Banyuwangi",
            "job" => "Web Developer || Mobile Developer || Web Designer"
        ]);
    }
}