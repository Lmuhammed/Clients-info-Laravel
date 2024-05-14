@extends('_partials.main')
@section('title', 'صفحة غي موجودة')
@section('main')
      <div class="row mt-0 mb-4">
      <div class="col-lg-8 col-sm-10 col-md-8 m-auto">
            <h1>صفحة خطأ</h1>
            <img src="{{asset('imgs/404.jpg')}}" class="img404 mt-2" alt="'404 image'">
            {{--        
            https://unsplash.com/photos/black-traffic-light-with-red-light-fms2_-YKamM
            Free to use under the Unsplash License     
            --}}  
            <div class="h3 mt-2 mb-1 gold-effect">
                عذرًا، لم يتم العثور على الصفحة المطلوبة. <br>
                يرجى التحقق من الرابط الذي قمت بإدخاله أو الانتقال إلى <a href="{{route('index')}}">الصفحة الرئيسية</a>. <br>
                شكرًا لك
            </div>  
        </div>
      </div>
@endsection