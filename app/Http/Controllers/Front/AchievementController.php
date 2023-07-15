<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('id','desc')->paginate(3);
        return view('front.achievement',compact('achievements'));
    }

    public function detail($slug)
    {
        $achievement_single = Achievement::where('slug',$slug)->first();
        return view('front.achievement_single',compact('achievement_single'));
    }
}
