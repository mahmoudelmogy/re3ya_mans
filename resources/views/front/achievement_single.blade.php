@extends('front.layout.app')



@section('main_content')


<div class="container_single">
    <div class="content_single">
         <div class="item_single">
            <div class="img_single">
                <img src="{{ asset('uploads/'.$achievement_single->photo) }}" alt="" width="400" height="200" />
            </div>
            <div class="text_single" style="text-align: center;">
                <p>{!! $achievement_single->description !!}</p>
            </div><!-- text -->
         </div><!-- item -->
    </div><!-- content -->
</div><!-- container -->



@endsection










