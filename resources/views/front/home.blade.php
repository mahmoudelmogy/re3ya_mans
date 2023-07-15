@extends('front.layout.app')

@section('main_content')



<!-- home section start -->

<section class="home" id="home" style="background-image: url({{ asset('uploads/'.$home_page_data->background) }})">
    <div class="overlay_home">
        <div class="content">
            <img src="{{ asset('uploads/'.$home_page_data->photo) }}" width="200" height="200">
            <h6 style="color: white; font-size: 20px; font-weight: bold;">{{ $home_page_data->heading }}</h6>


        </div>
                <div class="content">
           

            <p style="color: white; font-size: 15px; line-height:2; font-weight: bold;width: 487px; margin-top: 450px; margin-right: 500px;"> 
            تلعب الإدارة العامة لرعاية الشباب دورا بارزا فى بناء شخصية الطالب
              الجامعى بناءا متكاملا وذلك من خلال ممارسته لأوجه الأنشطة الطلابية
              التى تسهم فى إشباع ميوله ورغباته من خلال العديد من الأنشطة
              والخدمات المميزة لإستثمار طاقات ولإمكانيات الطلاب وإتاحة الفرصة
              أمامهم لإكتساب خبرات ومهارات جديدة ورفع المستوى البدنى والفكرى
              والوجدانى ويتم ذلك من خلال عدد من الوحدات والإدارات المتخصصة</p> 
        </div>
   </div>
</section>




   <!-- about section start -->
   @if ($home_page_data->ethad_status == 'Show')
      <section class="about" id="ethad">
       @foreach ($abouts as $item)
            <div class="img">
                <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
            </div>

                <div class="content">
                    <h3>{{ $item->heading }}</h3>
                    <p>{!! $item->description !!}</p>
                </div>
       @endforeach
      </section>


  @endif



<!-- category start  -->
@if ($home_page_data->achevement_status == 'Show')
    <section class="category" id="achevment">
    <h1 class="title"> {{ $home_page_data->achevement_heading }} <span></span> <a href="{{ route('achievements') }}">{{ $home_page_data->achevement_subheading }}</a> </h1>
    <div class="box-container">
        @foreach ($achievements as $item)
            <a href="{{ route('achievements_single',$item->slug) }}" class="box" style="height: 100px">
                <h3 style="padding-top: 30px">{{ $item->heading }}</h3>
            </a>
        @endforeach
    </div>
    </section>
@endif
    
<!-- teams section -->
@if ($home_page_data->teams_status == 'Show')

    <section class="products" id="teams" style="background-color: rgb(128،0،128);">

        <h1 class="title"> {{ $home_page_data->teams_heading }} <span></span> </span> <a href="{{ route('teams') }}">{{ $home_page_data->teams_subheading }}</a> </h1>

        <div class="box-container">

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
    </div>
    </section>

@endif

<!-- social search section start -->

@if ($home_page_data->social_search_status == 'Show')
    <section class="gallery" id="search">
        <h1 class="title">  {{ $home_page_data->social_search_heading }}  <span></span> <a href="{{ route('social_search') }}">{{ $home_page_data->social_search_subheading }}</a> </h1>
        <div class="box-container">

        @foreach ($socials as $item)
            <div class="box">
                <img src="{{ asset('uploads/'.$item->first_photo) }}" alt="">
                <div class="icons">
                    <a href="{{ asset('uploads/'.$item->first_photo) }}" title="تحميل" download="تحميل" class="fas fa-download"></a>
                </div>
            </div>

            <div class="box">
                <img src="{{ asset('uploads/'.$item->second_photo) }}" alt="">
                <div class="icons">
                    <a href="{{ asset('uploads/'.$item->second_photo) }}" title="تحميل" download="تحميل" class="fas fa-download"></a>
                </div>
            </div>

        @endforeach

        </div>
    </section>
@endif



<!-- Activites section start -->

@if ($home_page_data->activites_status == 'Show')

    <section class="blogs" id="activity" style="background-color: rgb(128،0،128);">
        <h1 class="title"> {{ $home_page_data->activites_heading }} <span></span> <a href="{{ route('activites') }}">{{ $home_page_data->activites_subheading }}</a> </h1>
        <div class="box-container">

            @foreach ($activites as  $item)
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

    </div>
    </section>
@endif

<!-- contect section start -->


<section class="contact" id="contact">
    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>رقم الموبايل</h3>
            <p>{{ $global_settings_data->phone_one }}</p>
            <p>{{ $global_settings_data->phone_two }}</p>
            <p>{{ $global_settings_data->phone_three }}</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>البريد الالكتروني</h3>
            <p>{{ $global_settings_data->email }}</p>
        </div>

    </div>

     <div class="row">
         <form action="{{ route('contact_send_email') }}" method="post" class="form_subscribe_ajax">
            @csrf
             <h3> اترك رساله</h3>
             <div class="inputBox">
             <input type="text" name="email" placeholder="ادخل البريد الالكتروني" class="box">
             <span style="color: red;" class="text-danger error-text email_error"></span>
            </div>
               <textarea  name="message" placeholder=" اترك رسالتك هنا" cols="30" rows="10"></textarea>
               <input type="submit" value="إرسال" class="btn">
         </form>
     </div>

</section>

<div class="space" style="background-color: teal;"></div>


@endsection
