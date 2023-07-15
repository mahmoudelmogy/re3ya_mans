<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Team;

class AdminTeamController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        return view('admin.team',compact('teams'));
    }

    public function create()
    {
        return view('admin.team_create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:png,jpg,png,gif',

         ]);

         $obj = new Team();

         $ext = $request->file('photo')->extension();
         $final_name = 'team'.time().'.'.$ext;

        $request->file('photo')->move(public_path('uploads/'),$final_name);

         $obj->photo = $final_name;
         $obj->heading  = $request->heading;
         $obj->description  = $request->description;
         $obj->facebook  = $request->facebook;
         $obj->instagram  = $request->instagram;
         $obj->linkedin  = $request->linkedin;
         $obj->save();

         return redirect()->route('admin_Team')->with('success','Data is saved successfully');
    }

    public function edit($id)
    {
         $team_single = Team::where('id',$id)->first();
         return view('admin.team_edit',compact('team_single'));
    }

    public function update(Request $request, $id)
    {

        $obj = Team::where('id',$id)->first();

        $request->validate([
            'heading' => 'required',
            'description' => 'required',
         ]);

         if($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'team'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;

        }

        $obj->heading  = $request->heading;
        $obj->description  = $request->description;
        $obj->facebook  = $request->facebook;
        $obj->instagram  = $request->instagram;
        $obj->linkedin  = $request->linkedin;
         $obj->update();

         return redirect()->route('admin_Team')->with('success','Data is updated successfully');
    }

    public function delete($id)
    {
        $team_single = Team::where('id',$id)->first();
        unlink(public_path('uploads/'.$team_single->photo));

        Team::where('id',$id)->delete();
        return redirect()->route('admin_Team')->with('success','Data is deleted successfully');
    }
}
