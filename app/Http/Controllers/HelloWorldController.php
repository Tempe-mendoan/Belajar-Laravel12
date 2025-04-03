<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        return "selamat belajar laravel 12";
    }
    public function ambilFile()
    {
        return view ('ambilFile');
    }
    //
}
