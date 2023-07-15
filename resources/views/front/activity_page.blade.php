@extends('front.layout.app')

@section('main_content')

<div class="cont_activity" style="margin-top: 100px; width:50%; height:100%">

    <div class="form_activity">
      <form action="{{ route('activity_send_data') }}" method="POST">
        @csrf
        <h1 class="title_activity">بيانات الاشتراك</h1>
        <input type="hidden" name="activity_id" value="{{ $activity_single->id }}">
        @if($activity_single->type == "Sport")
            <textarea name="team_name" class="pass_activity" id="" cols="30" rows="10" placeholder="ادخل اسم الفريق واعضاء الفريق" required></textarea>
            <input name="mobile" type="text" class="user_activity" placeholder=" أدخل الايميل" required/>
        @else
           <input name="full_name" type="text" class="pass_activity" placeholder="أدخل  الاسم بالكامل" required/>
           <input name="mobile" type="text" class="user_activity" placeholder=" أدخل الايميل" required/>
        @endif
        <button class="activity_button">إرسال</button>
      </form>
    </div>

  </div>


@endsection




