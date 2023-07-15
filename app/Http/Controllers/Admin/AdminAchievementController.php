<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Achievement;

class AdminAchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::get();
        return view('admin.achievement',compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievement_create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'heading' => 'required',
            'slug' => 'required|unique:achievements',
            'description' => 'required',
            'photo' => 'required|image|mimes:png,jpg,png,gif'
         ]);

         $obj = new Achievement();

         $ext = $request->file('photo')->extension();
         $final_name = 'achievement'.time().'.'.$ext;

        $request->file('photo')->move(public_path('uploads/'),$final_name);

         $obj->photo = $final_name;
         $obj->heading  = $request->heading;
         $obj->slug  = $request->slug;
         $obj->description  = $request->description;
         $obj->save();

         return redirect()->route('admin_Achievement')->with('success','Data is saved successfully');
    }

    public function edit($id)
    {
         $achievement_single = Achievement::where('id',$id)->first();
         return view('admin.achievement_edit',compact('achievement_single'));
    }

    public function update(Request $request, $id)
    {

        $obj = Achievement::where('id',$id)->first();

        $request->validate([
            'heading' => 'required',
            'slug' => ['required',Rule::unique('achievements')->ignore($id)],
            'description' => 'required',
         ]);

         if($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'achievement'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;

        }

        $obj->heading  = $request->heading;
        $obj->slug  = $request->slug;
        $obj->description  = $request->description;
         $obj->update();

         return redirect()->route('admin_Achievement')->with('success','Data is updated successfully');
    }

    public function delete($id)
    {
        $achievement_single = Achievement::where('id',$id)->first();
        unlink(public_path('uploads/'.$achievement_single->photo));

        Achievement::where('id',$id)->delete();
        return redirect()->route('admin_Achievement')->with('success','Data is deleted successfully');
    }
}
