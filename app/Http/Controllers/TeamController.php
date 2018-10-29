<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function indexCenter(){

        return view('teams.center');
    }

    public function indexProgram(){

        return view('teams.program');
    }

}
