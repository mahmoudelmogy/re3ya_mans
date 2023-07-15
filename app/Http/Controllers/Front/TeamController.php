<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;


class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('id','desc')->paginate(8);
        return view('front.team',compact('teams'));
    }

    public function detail($id)
    {
        $team_single = Team::where('id',$id)->first();
        return view('front.team_single',compact('team_single'));
    }
}
