<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class AdminSettingController extends Controller
{
    public function index()
    {
        $settings = Setting::where('id',1)->first();
        return view("admin.settings",compact("settings"));
    }

    public function update(Request $request)
    {
        $obj = Setting::where('id',1)->first();

        $request->validate([
            'copyright_text' => 'required',
         ]);


        $obj->phone_one  = $request->phone_one;
        $obj->phone_two  = $request->phone_two;
        $obj->phone_three  = $request->phone_three;
        $obj->email  = $request->email;
        $obj->facebook  = $request->facebook;
        $obj->twitter  = $request->twitter;
        $obj->linkedin  = $request->linkedin;
        $obj->instagram  = $request->instagram;
        $obj->copyright_text  = $request->copyright_text;
         $obj->update();

         return redirect()->back()->with('success','Data is updated successfully');
    }
}
