<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام إدارة الزبناء</title>
    <link rel="stylesheet" href="{{asset('Boostrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CostumStyles/main.css')}}">
      {{-- @yield("styles") --}}
</head>
<body>
   <!-- nav -->
   
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <div class="container">
      {{-- nav brand --}}
    <a class="navbar-brand" href="{{route('clients.index')}}">نظام إدارة معلومات الزبناء</a>
      {{-- end nav brand --}}
      {{-- user action --}}
      @if(Auth::check())      
    <div class="ms-2 text-light">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->full_name }}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">تعديل المعلومات</a></li>
          <li><a class="dropdown-item" href="{{route('signout')}}">تسجيل الخروج</a></li>
        </ul>
      </li>
      {{-- end user action --}}
    </div>
    @endif
  </div>
</nav>
    <!-- endnav -->
    <div class="container pt-1 pb-1">
    @yield("main")
    </div>
  <script src="{{asset('Boostrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>