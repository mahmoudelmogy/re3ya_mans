<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItem;
use Auth;


class AdminHomePageController extends Controller
{
    public function index()
    {
        $page_home_data = PageHomeItem::where('id',1)->first();
        return view('admin.page_home',compact('page_home_data'));
    }


    public function update(Request $request)
    {

        $home_page_data = PageHomeItem::where('id',1)->first();

        $request->validate([
            'heading' => 'required',
            'achevement_heading' => 'required',
            'achevement_subheading' => 'required',
            'achevement_status' => 'required',
            // 'teams_heading' => 'required',
            // 'teams_subheading' => 'required',
            // 'teams_status' => 'required',
            // 'ethad_status' => 'required',
            // 'social_search_heading' => 'required',
            // 'social_search_subheading' => 'required',
            // 'social_search_status' => 'required',
            // 'activites_heading' => 'required',
            // 'activites_subheading' => 'required',
            // 'activites_status' => 'required',
        ]);

        if($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$home_page_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'logo_home'.'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $home_page_data->photo = $final_name;

        }

        if($request->hasFile('background'))
        {
            $request->validate([
                'background' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$home_page_data->background));

            $ext = $request->file('background')->extension();
            $final_name = 'banner_home'.'.'.$ext;

            $request->file('background')->move(public_path('uploads/'),$final_name);

            $home_page_data->background = $final_name;

        }

        $home_page_data->heading = $request->heading;

        $home_page_data->achevement_heading = $request->achevement_heading;
        $home_page_data->achevement_subheading = $request->achevement_subheading;
        $home_page_data->achevement_status = $request->achevement_status;


        $home_page_data->teams_heading = $request->teams_heading;
        $home_page_data->teams_subheading = $request->teams_subheading;
        $home_page_data->teams_status = $request->teams_status;


        $home_page_data->ethad_status = $request->ethad_status;

        $home_page_data->social_search_heading = $request->social_search_heading;
        $home_page_data->social_search_subheading = $request->social_search_subheading;
        $home_page_data->social_search_status = $request->social_search_status;

        $home_page_data->activites_heading = $request->activites_heading;
        $home_page_data->activites_subheading = $request->activites_subheading;
        $home_page_data->activites_status = $request->activites_status;

        $home_page_data->update();

        return redirect()->back()->with('success','Data is Updated successfully');

    }

}
