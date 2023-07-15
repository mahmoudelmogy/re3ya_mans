<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
use App\Models\SocialBack;


class AdminSocialController extends Controller
{
    public function index()
    {
        $socials = Social::get();
        return view('admin.social',compact('socials'));
    }

    public function create()
    {
        return view('admin.social_create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'first_photo' => 'required|image|mimes:png,jpg,png,gif',
            'second_photo' => 'required|image|mimes:png,jpg,png,gif',

         ]);

         $obj = new Social();

         $ext = $request->file('first_photo')->extension();
         $final_name = 'first_photo'.time().'.'.$ext;

         $request->file('first_photo')->move(public_path('uploads/'),$final_name);

         $obj->first_photo = $final_name;


        ///////////////////  second photo ///////////////////////////////
        $ext2 = $request->file('second_photo')->extension();
        $final_name2 = 'second_photo'.time().'.'.$ext2;
        $request->file('second_photo')->move(public_path('uploads/'),$final_name2);
        $obj->second_photo = $final_name2;

         $obj->save();

         return redirect()->route('admin_Social')->with('success','Data is saved successfully');
    }

    public function edit($id)
    {
         $social_single = Social::where('id',$id)->first();
         return view('admin.social_edit',compact('social_single'));
    }

    public function update(Request $request, $id)
    {

        $obj = Social::where('id',$id)->first();

         if($request->hasFile('first_photo'))
        {
            $request->validate([
                'first_photo' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$obj->first_photo));

            $ext = $request->file('first_photo')->extension();
            $final_name = 'first_photo'.time().'.'.$ext;

            $request->file('first_photo')->move(public_path('uploads/'),$final_name);

            $obj->first_photo = $final_name;

        }

        // second photo ///////////////////////////

        if($request->hasFile('second_photo'))
        {
            $request->validate([
                'second_photo' => 'image|mimes:png,jpg,jpeg,gif'
            ]);

            unlink(public_path('uploads/'.$obj->second_photo));

            $ext2 = $request->file('second_photo')->extension();
            $final_name2 = 'second_photo'.time().'.'.$ext2;

            $request->file('second_photo')->move(public_path('uploads/'),$final_name2);

            $obj->second_photo = $final_name2;

        }



         $obj->update();

         return redirect()->route('admin_Social')->with('success','Data is updated successfully');
    }

    public function delete($id)
    {
        $social_single = Social::where('id',$id)->first();
        unlink(public_path('uploads/'.$social_single->first_photo));
        unlink(public_path('uploads/'.$social_single->second_photo));

        Social::where('id',$id)->delete();
        return redirect()->route('admin_Social')->with('success','Data is deleted successfully');
    }



    public function all_social_search()
    {
        $socials = SocialBack::with('rSocial')->get();

        return view('admin.social_search_all', compact('socials'));
    }

    public function delete_all_social_search($id)
    {

        $social_single = SocialBack::where('id',$id)->first();
        unlink(public_path('uploads/'.$social_single->file));

        SocialBack::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }


}
