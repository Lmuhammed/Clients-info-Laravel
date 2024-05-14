<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'نظام إدارة الزبناء')</title>
    <link rel="stylesheet" href="{{asset('Boostrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('other_JS_CSS/main.css')}}">
    <link rel="icon" type="image/png" href="{{asset('imgs/favicon.svg')}}"> <!-- favicon 
    source : https://icons.getbootstrap.com/icons/people/
    -->
    {{-- @yield("styles") --}}
</head>
<body>
   <!-- nav -->
   <div class="bg-dark d-print-none">
    <div class="container">
      <nav class="navbar navbar-dark mb-2">
        {{-- nav brand --}}
      <a class="navbar-brand" href="{{route('index')}}">نظام إدارة معلومات الزبناء</a>
        {{-- user action --}}
        @auth
        <div class="ms-2 text-light">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b class="text-warning">{{ Auth::user()->full_name }}</b>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item disabled" href="#" >تعديل المعلومات</a></li>
              <li><a class="dropdown-item" href="{{route('signout')}}">تسجيل الخروج</a></li>
            </ul>
          </li>
        </div>
        @endauth    
    </nav>
    </div>
   </div>
    <!-- endnav -->
    <div class="container pt-1 pb-1">
    @if(session('msg-color') && session('message'))
      <x-main.alert message="{{session('message')}}" color="{{session('msg-color')}}"/>
    @endif
    @yield("main")
    </div>
  <script src="{{asset('Boostrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('other_JS_CSS/main.js')}}"></script>
</body>
</html>