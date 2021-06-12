<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('nirage.index');
    }

    public function  appartements()
    {
        return view('nirage.appartements');
    }
}
