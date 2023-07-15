<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send_email(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email'
        ]);

        if(!$validator->passes())
        {
            return response()->json(['code'=>0,'error_message'=>$validator->errors()->toArray()]);
        }
        else
        {
            $obj = new Contact();
            $obj->email = $request->email;
            $obj->message = $request->message;
            $obj->save();

            return response()->json(['code'=>1,'success_message'=>'Message is sent successfully! we will contact you soon']);
        }
    }
}





// $check = Contact::where('email',$request->email)->count();
// if($check>0)
// {
//     return response()->json(['code'=>2,'error_message_2'=>(array)'this email is sent a message before!']);
// }
// else
// {
//     $obj = new Contact();
//     $obj->email = $request->email;
//     $obj->message = $request->message;
//     $obj->save();

//     return response()->json(['code'=>1,'success_message'=>'Message is sent successfully! we will contact you soon']);
// }
