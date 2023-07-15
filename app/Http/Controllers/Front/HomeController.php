<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItem;
use App\Models\Achievement;
use App\Models\Team;
use App\Models\About;
use App\Models\Social;
use App\Models\Activity;



class HomeController extends Controller
{
    public function index()
    {
        $home_page_data = PageHomeItem::where('id',1)->first();
        $achievements = Achievement::orderBy('id','desc')->take(3)->get();
        $teams = Team::orderBy('id','desc')->take(3)->get();
        $abouts = About::orderBy('id','desc')->get();
        $socials = Social::orderBy('id','desc')->get();
        $activites = Activity::orderBy('id','desc')->take(3)->get();



        return view('front.home',compact('home_page_data','achievements','teams','abouts','socials','activites'));
    }
}
