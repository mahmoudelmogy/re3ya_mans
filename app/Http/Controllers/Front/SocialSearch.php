<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\SocialBack;
use Auth;


class SocialSearch extends Controller
{
    public function index()
    {
        $social_single =  Student::where('id',Auth::guard()->user()->id)->first();

        return view('front.social_search',compact('social_single'));
    }

    // public function social_form($id)
    // {
    //     $social_single =  Student::where('id',Auth::guard()->user()->id)->first();
    //     return view('front.social_search',compact('social_single'));
    // }


    public function send_data(Request $request)
    {


        $request->validate([
            'file' => 'required',
         ]);

         $obj = new SocialBack();

         $ext = $request->file('file')->extension();
         $final_name = 'social_search'.time().'.'.$ext;

        $request->file('file')->move(public_path('uploads/'),$final_name);

         $obj->file = $final_name;
         $obj->student_id  = $request->student_id;

         $obj->save();

         return redirect()->route('home')->with('success','تم تقديم الطلب بنجاح');
    }

}





