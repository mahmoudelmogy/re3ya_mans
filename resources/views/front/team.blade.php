@extends('front.layout.app')

@section('main_content')



<section class="products" id="teams" style="background-color: rgb(199, 199, 199);">

    <div class="box-container" style="margin-top: 100px;">
    @foreach ($teams as $item)
        <div class="box">
            <div class="icons" style="height: 80%">
                <a href="{{ $item->facebook }}" class="fab fa-facebook"></a>
                <a href="{{ $item->instagram }}" class="fab fa-instagram"></a>
                <a href="{{ $item->linkedin }}" class="fab fa-linkedin"></a>
            </div>
            <div class="img">
                <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
            </div>
            <div class="content">
                <h3>
                    <a href="{{ route('teams_single',$item->id) }}" style="color:black;">{{ $item->heading }}</a>
                </h3>
            </div>
        </div>
    @endforeach
    <div class="links_bar">{{ $teams->links() }}</div>
</div>
</section>






@endsection

