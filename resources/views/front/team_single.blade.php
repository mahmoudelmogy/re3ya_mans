@extends('front.layout.app')



@section('main_content')





<div class="team_container">
    <div class="content_team">
        <div class="box_team">
            <div class="img">
                <img src="{{ asset('uploads/'.$team_single->photo) }}" alt="">
            </div>
            <div class="icons_team">
                <a href="{{ $team_single->facebook }}" class="fab fa-facebook"></a>
                <a href="{{ $team_single->instagram }}" class="fab fa-instagram"></a>
                <a href="{{ $team_single->linkedin }}" class="fab fa-linkedin"></a>
            </div>
            <div class="text_team">
                <h3>{!! $team_single->description !!}</h3>
            </div>
        </div>
    </div>
</div>








@endsection










