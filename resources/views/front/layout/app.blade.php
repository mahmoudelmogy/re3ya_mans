<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رعايه الطلاب</title>

    @include('front.layout.styles')

    @include('front.layout.scripts')



</head>
<body style="background-color: rgb(196, 192, 192); box-sizing: border-box;">

<!-- header section start page -->

<header class="header">
    <a href="{{ route('home') }}" class="logo">كليه الحاسبات والمعلومات </a>

    <nav class="navbar">
        <a href="{{ route('home') }}">الرئيسه</a>
        <a href="#ethad">اهداف الرعايه</a>
        <a href="#achevment">الانجازات</a>
        <a href="#teams">الفرق الدراسيه</a>
        <a href="#search">البحث الاجتماعي</a>
         <a href="#activity">الانشطه</a>
        <a href="#contact">تواصل معنا</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>

        {{-- <a href="{{ route('student_login') }}"> <div id="login-btn" class="fas fa-user">تسجيل الدخول</div> </a> --}}



        @if(Auth::guard('student')->check())
              <a href="{{ route('student_logout') }}"> <div id="login-btn" class="fas fa-user">تسجيل الخروج</div> </a>
        @else
              <a href="{{ route('student_login') }}"> <div id="login-btn" class="fas fa-user">تسجيل الدخول</div> </a>
        @endif



    </div>


</header>
{{-- end header --}}


 @yield('main_content')



<!-- footer section start -->
<section class="footer" style="background-color: teal ;">
    <div class="box-container">
        <div class="box">
            <h3>لينكات سريعه</h3>
        <a href="{{ route('home') }}"> <i class="fas fa-arrow-left"></i> الرئيسه</a>
        <a href="#activity"> <i class="fas fa-arrow-left"></i>الانشطه</a>
        <a href="#achevment"> <i class="fas fa-arrow-left"></i>الانجازات</a>
        <a href="#ethad"> <i class="fas fa-arrow-left"></i>الإتحاد</a>
        </div>

        <div class="box">
            <h3>لينكات إضافيه</h3>
            <a href="#search"> <i class="fas fa-arrow-left"></i>   البحث الاجتماعي </a>
            <a href="#teams"> <i class="fas fa-arrow-left"></i>   الفرق </a>
            <a href="#contact"> <i class="fas fa-arrow-left"></i>   تواصل  </a>
        </div>

        <div class="box">
            <h3>تابعنا</h3>
            <a href="{{ $global_settings_data->facebook }}"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="{{ $global_settings_data->twitter }}"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="{{ $global_settings_data->instagram }}"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="{{ $global_settings_data->linkedin }}"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>
</section>

<section class="credit" style="background-color: teal;"> {{ $global_settings_data->copyright_text }}</section>






@include('front.layout.scripts_bottom')




@if($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}',
            });
        </script>
    @endforeach
@endif

@if(session()->get('error'))
     <script>
         iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('error') }}',
         });
     </script>
@endif

@if(session()->get('success'))
     <script>
         iziToast.success({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('success') }}',
         });
     </script>
@endif


<script>
    (function($){
        $(".form_subscribe_ajax").on('submit', function(e){
            e.preventDefault();
            var form = this;
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data)
                {
                    if(data.code == 0)
                    {
                        $.each(data.error_message, function(prefix, val) {
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                    }
                    else if(data.code == 2)
                    {
                        $.each(data.error_message_2, function(prefix, val) {
                            $('.email_error').text(data.error_message_2);
                        });
                    }
                    else if(data.code == 1)
                    {
                        $(form)[0].reset();
                        iziToast.success({
                            title: '',
                            position: 'topRight',
                            message: data.success_message,
                        });
                     }
                }
            });
        });
    })(jQuery);
</script>




</body>
</html>
