@extends('front.layout.app')

@section('main_content')



<div class="cont_login" style="margin-top: 100px;">
    <div class="form_login">
      <form  method="POST" action="{{ route('student_login_submit') }}">
        @csrf
        <h1 class="title_login">تسجيل الدخول</h1>
        <input type="password" class="user_login" name="personal" placeholder="أدخل الرقم القومي"/>
        <input type="password" class="pass_login" name="university" placeholder="أدخل رقم القيد"/>
        <button class="login_button">دخول</button>
      </form>
    </div>
</div>





@endsection


