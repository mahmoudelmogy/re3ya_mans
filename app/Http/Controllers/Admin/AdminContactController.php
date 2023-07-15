<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function all_contacts()
    {
        $contacts = Contact::get();
        return view('admin.all_contacts', compact('contacts'));
    }


    public function delete($id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }
}
