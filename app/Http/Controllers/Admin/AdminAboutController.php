<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\About;

class AdminAboutController extends Controller
{
    public function index()
    {
        $abouts = About::get();
        return view('admin.about',compact('abouts'));
    }

    public function create()
    {
        return view('admin.about_create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:png,jpg,png,gif',
         ]);

         $obj = new About();

         $ext = $request->file('photo')->extension();
         $final_name = 'about'.time().'.'.$ext;

        $request->file('photo')->move(public_path('uploads/'),$final_name);

         $obj->photo = $final_name;
         $obj->heading  = $request->heading;
         $obj->description  = $request->description;
         $obj->save();

         return redirect()->route('admin_About')->with('success','Data is saved successfully');
    }

    public function edit($id)
    {
         $about_single = About::where('id',$id)->first();
         return view('admin.about_edit',compact('about_single'));
    }

    public function update(Request $request, $id)
    {

        $obj = About::where('id',$id)->first();

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
            $final_name = 'about'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;

        }

        $obj->heading  = $request->heading;
        $obj->description  = $request->description;
         $obj->update();

         return redirect()->route('admin_About')->with('success','Data is updated successfully');
    }

    public function delete($id)
    {
        $about_single = About::where('id',$id)->first();
        unlink(public_path('uploads/'.$about_single->photo));

        About::where('id',$id)->delete();
        return redirect()->route('admin_About')->with('success','Data is deleted successfully');
    }
}
