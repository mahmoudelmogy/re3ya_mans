<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\ActivityBack;
use Auth;

class AdminActivityController extends Controller
{
    public function index()
    {
        $activites = Activity::get();
        return view('admin.activites',compact('activites'));
    }

    public function create()
    {
        return view('admin.activity_create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'heading' => 'required',
            'photo' => 'required|image|mimes:png,jpg,png,gif',
         ]);

         $obj = new Activity();

         $ext = $request->file('photo')->extension();
         $final_name = 'activity'.time().'.'.$ext;

        $request->file('photo')->move(public_path('uploads/'),$final_name);

         $obj->photo = $final_name;
         $obj->heading  = $request->heading;
         $obj->save();

         return redirect()->route('admin_Activity')->with('success','Data is saved successfully');
    }

    public function edit($id)
    {
         $activity_single = Activity::where('id',$id)->first();
         return view('admin.activity_edit',compact('activity_single'));
    }

    public function update(Request $request, $id)
    {

        $obj = Activity::where('id',$id)->first();

        $request->validate([
            'heading' => 'required',
         ]);

         if($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'activity'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;

        }

        $obj->heading  = $request->heading;
         $obj->update();

         return redirect()->route('admin_Activity')->with('success','Data is updated successfully');
    }

    public function delete($id)
    {
        $activity_single = Activity::where('id',$id)->first();
        unlink(public_path('uploads/'.$activity_single->photo));

        Activity::where('id',$id)->delete();
        return redirect()->route('admin_Activity')->with('success','Data is deleted successfully');
    }


    public function all_activites()
    {
        $activites = ActivityBack::with('rActivity')->get();
        return view('admin.all_activites', compact('activites'));
    }

    public function delete_activites($id)
    {
        ActivityBack::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }


    public function sport_activites()
    {
        $activity_sport = Activity::where('type',"Sport")->get();


        $activites = ActivityBack::with('rActivity')->get();

        return view('admin.sport_activites', compact('activites','activity_sport'));
    }

    public function delete__sport_activites($id)
    {
        ActivityBack::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }


}


