<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() 
    {
        return view('index');
    }

    public function about() 
    {
        return view('about');
    }

    // method selanjutnya untuk bagian front
}
