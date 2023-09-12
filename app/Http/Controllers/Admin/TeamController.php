<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function team_members(){

        return view('back-end.team.index');
    }

    public function add_member(){

        return view('back-end.team.add_member');
    }


}
