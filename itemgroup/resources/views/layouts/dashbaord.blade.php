<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   <style>
    *{
      font-family: cairo;
    }
   </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body dir="rtl">
    <div id="app">
          <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#">SALLA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">الرئيسية </a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('itemgroup')}}">إضافة تصنيف جديد</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">إضافة منتج جديد </a>
                  </li>
                 
                </ul>
              </div>
             
             
              <div class="collapse navbar-collapse" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <h3 class="nav-link active text-white" aria-current="page" href="#" style="font-family: cairo;">معسكر طويق</h3>
                    </li>
                   
                    
                  </ul>
               
              </div>
             
             
              <div>
                @if(auth::guest())
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="{{route('register')}}">Register</a>
                    </li>
                  </ul>
                  @else
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link text-white" href="{{route('logout')}}">Logout</a>
                    </li>
                  </ul>
                 @endif
              </div>
            </div>
          </nav>

          <main class="py-0">
            <div class="">
                <div class="row">
                <div class="col-sm-2  bg-dark">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="fs-5 d-none d-sm-inline">Menu</span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item">
                                    <a href="{{route('dispayItems')}}" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">المنتجات</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('DisplayAddg')}}" class="nav-link align-middle px-0">
                                        <i class="bi bi-tag-fill"></i> <span class="ms-1 d-none d-sm-inline text-white">إضافة تصنيف </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('DisplayAdd')}}" class="nav-link align-middle px-0">
                                        <i class="bi bi-bag-dash"></i> <span class="ms-1 d-none d-sm-inline text-white">إضافة منتج جديد</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="bi bi-receipt"></i> <span class="ms-1 d-none d-sm-inline text-white">الفواتير</span></a>
                                </li>
                               
                               
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="bi bi-person"></i> <span class="ms-1 d-none d-sm-inline text-white">العملاء</span> </a>
                                </li>
                            </ul>
                            <hr>
                            <div class="dropdown pb-4">
                                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                    <span class="d-none d-sm-inline mx-1">loser</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 justify-content-center">
                        @yield('content')
                    </div>
                </div>
               
            </div>
          
          </main>
   
   
   
   
   
   
    </div>

   

</body>
</html>
