@extends('front.layout.app')

@section('main_content')



<section class="blogs" id="activity" style="background-color: rgb(199, 199, 199);">
    <div class="box_container_activites">

        @foreach ($activities as $item)
            <div class="box">
                <div class="img">
                    <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
                </div>
                <div class="content">
                    <h3>{{$item->heading}}</h3>
                    <a href="{{ route('activity_form',$item->id) }}" class="btn">إشتراك</a>
                </div>
            </div>
        @endforeach
        <div class="links_bar">{{ $activities->links() }}</div>
</div>
</section>





@endsection


