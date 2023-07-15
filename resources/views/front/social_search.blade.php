@extends('front.layout.app')

@section('main_content')


<div class="cont_search" style="margin-top: 100px;">
    <div class="form_search">
      <form action="{{ route('social_send_data') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="title_search">تقديم طلب</h1>
        <input type="hidden" name="student_id" value="{{ $social_single->id }}">
        <input type="file" name="file" id="files" style="display: none;"/>
        <label for="files" class="user_search" style="cursor: pointer;">إختر ملف</label>
        <button class="search_button">إرسال</button>
      </form>
    </div>
  </div>





@endsection
