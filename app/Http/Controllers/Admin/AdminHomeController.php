<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Team;
use App\Models\Achievement;


class AdminHomeController extends Controller
{
    public function index()
    {

        $total_activites = Activity::get()->count();
        $total_teams = Team::get()->count();
        $total_achevements = Achievement::get()->count();

        return view('admin.home',compact('total_activites','total_teams','total_achevements'));
    }
}
