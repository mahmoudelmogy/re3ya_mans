<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\ActivityBack;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::orderBy('id','desc')->paginate(8);
        return view('front.activities',compact('activities'));
    }

    public function activity_form($id)
    {
        $activity_single =  Activity::where('id',$id)->first();
        return view('front.activity_page',compact('activity_single'));
    }



    public function send_data(Request $request)
    {
        $request->validate([
            'mobile' => 'required',
         ]);

         $obj = new ActivityBack();

         $obj->activity_id  = $request->activity_id;
         $obj->team_name  = $request->team_name;
         $obj->full_name  = $request->full_name;
         $obj->mobile  = $request->mobile;
         $obj->save();

         return redirect()->route('home')->with('success','تم الاشتراك بنجاح');
    }


}



// public function make_payment()
// {
//    $current_plan =  Order::with('rPackage')->where('company_id',Auth::guard('company')->user()->id)->where('currently_active',1)->first();

//    $packages = Package::get();

//     return view('company.make_payment',compact('current_plan','packages'));
// }
