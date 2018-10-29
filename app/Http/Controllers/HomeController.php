<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeIndex(){
        return view('home');
    }

    public function homeMore(){
        return view('more');
    }

    public function aboutusIndex(){
        return view('aboutus');
    }
}
