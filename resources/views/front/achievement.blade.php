@extends('front.layout.app')

@section('main_content')


<div class="container_acheve">
    <div class="content_acheve">
        @foreach ($achievements as $item)
            <div class="item_acheve">
                <div class="text_acheve">
                    <h2>
                        <a href="{{ route('achievements_single',$item->slug) }}">{{ $item->heading }}</a>
                    </h2>
                </div><!-- text -->
            </div><!-- item -->
        @endforeach

        <div class="links_bar">{{ $achievements->links() }}</div>

    </div><!-- content -->
</div><!-- container -->



@endsection

