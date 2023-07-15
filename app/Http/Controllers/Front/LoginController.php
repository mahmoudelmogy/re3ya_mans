<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('front.login');
    }


    public function student_login_submit(Request $request)
    {

        $request->validate([
            'personal' => 'required',
            'university' => 'required'
        ]);

        // $credential = [
        //       'personal' => $request->personal,
        //       'university' => $request->university
        // ];

        $personal = $request->input('personal');
        $university = $request->input('university');
        $credential = Student::where('personal', $personal)->where('university',$university)->first();

        if ($credential)
         {
            Auth::guard('student')->login($credential);
            return redirect()->route('home')->with('success','تم تسجيل الدخول');
        }

        return redirect()->route('student_login')->with('error','information is not correct');



        // if(Auth::guard('student')->attempt($credential))



        // if(Auth::guard('student')->attempt(['personal'=>$request->input('personal'),'university'=>$request->input('university')]))
        // {
        //     return redirect()->route('home');
        // }
        // else{
        //     return redirect()->route('login')->with('error','information is not correct');
        // }
    }


    public function student_logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student_login')->with('success','تم تسجيل الخروج');
    }


}

