<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام إدارة الزبناء</title>
    <link rel="stylesheet" href="{{asset('Boostrap/css/bootstrap.min.css')}}">
</head>
<body>
   <!-- nav -->
   <nav class="navbar navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('clients.index') }}">نظام إدارة الزبناء</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
    <!-- endnav -->

    <div class="container pt-1 pb-1">
       <!-- success message   -->
    @if(session('success'))
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">رسالة</h4>
    <hr>
    <p> {{ session('success') }} </p>
    </div>
    @endif
   <!-- end message -->
   <!-- danger message   -->
   @if(session('danger'))
    <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">رسالة</h4>
    <hr>
    <p> {{ session('danger') }} </p>
    </div>
    @endif
   <!-- end message -->
    @yield("main")
    </div>
    <!-- <script src=""></script> -->
</body>
</html>