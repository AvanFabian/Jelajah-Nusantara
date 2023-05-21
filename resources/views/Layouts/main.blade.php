<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield ('title')</title>

   {{-- Google Font Link --}}

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
   <link href='https://fonts.googleapis.com/css?family=Nerko+One' rel='stylesheet'>
   <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

   {{-- CSS --}}

   <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ url('css/fontawesome.css') }}">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="{{ url('css/mainContent.css') }}">
   <link href="{{ url('bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

   {{-- FavIcon --}}

   <link rel="shortcut icon" type="image/png" href="{{ url('images/IndonesiaBendera.png') }}">
</head>

<body>
   @if (!isset($isCover) && !isset($isRegister) && !isset($isExplore2))
      {{-- Navbar --}}
      {{-- Jika bukan halaman Cover maka jangan load kode dibawah --}}
      @if (isset($isTeam))
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
         @else
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      @endif
      <div class="container d-flex justify-content-between">
         <a class="navbar-brand" href="#"><span class="text-danger">Jelajah</span>Nusantara</a> <button
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
            type="button"><span class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link" href="/home/pulau">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/home/pulau#portfolio">Top Contents</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/home/explore">Explore</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/home/pulau#contact">FeedBack</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/home/our-team">Our Team</a>
               </li>
            </ul>
         </div>
         <div class="btn-group">
            @if (!Auth::user())
               <button class="btn btn-secondary btn-sm dropdown-toggle bg-dark border-dark" type="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ url('images/defaultUser2.png') }}" alt="user" style="width: 50px; height: 46px;">
               </button>
            @elseif(Auth::user()->profile_photo_path == 'public/images/defaultUser2.png')
               @if (isset($isTeam))
                  <button class="btn btn-secondary btn-sm dropdown-toggle bg-light border-light" type="button"
                     data-bs-toggle="dropdown" aria-expanded="false">
                  @else
                     <button class="btn btn-secondary btn-sm dropdown-toggle bg-dark border-dark" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
               @endif
               {{-- <img src="{{ url('images/defaultUser2.png') }}" alt="user" style="width: 50px; height: 46px;"> --}}
               <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}" id="profileDefault" alt="user" style="width: 50px; height: 46px;">
               </button>
            @else
               <button class="btn btn-secondary btn-sm dropdown-toggle bg-dark border-dark" type="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}" id="profileImage" alt="user" style="width: 50px; height: 46px;">
               </button>
            @endif
            <ul class="dropdown-menu">
               {{-- Check if user logged in --}}
               @if (Auth::check())
                  <input type="file" id="imageInput" name="profilePicture" style="display: none;">
                  <li><a class="dropdown-item" href="#" onclick="selectImage()">Upload Picture</a></li>
                  <li><a class="dropdown-item" href="/login">Switch Account</a></li>
                  <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
               @else
                  <li><a class="dropdown-item" href="/login">Login</a></li>
               @endif
            </ul>
         </div>
      </div>
      </nav>
   @endif {{-- Akhiri pengecekan halaman Cover --}}
   {{-- EndNavbar --}}
   {{-- ContentStart --}}
   <div class="main-content">
      @yield('content')
      {{-- Footer --}}
      @if (!isset($isCover) && !isset($isRegister) && !isset($isExplore2))
         {{-- Jika bukan halaman Cover maka jangan load kode dibawah --}}
         @if (isset($isTeam))
            <footer class="bg-light p-2 text-center page-footer" id="footerMain">
               <div class="container">
                  <p class="body-md text-center text-dark copyright">
                     &copy; 2023 Jentara. Developed with <span class="span">❤</span> by JentTeam.
                  </p>
               </div>
            </footer>
         @else
            <footer class="bg-dark p-2 text-center page-footer" id="footerMain">
               <div class="container">
                  <p class="body-md text-center text-light copyright">
                     &copy; 2023 Jentara. Developed with <span class="span">❤</span> by JentTeam.
                  </p>
               </div>
            </footer>
         @endif
      @endif {{-- Akhiri pengecekan halaman Cover --}}
      {{-- EndFooter --}}
   </div>
   {{-- EndContent --}}
   {{-- Script Start --}}
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ url('js/userProfile.js') }}"></script>
   <script src="{{ url('js/elemenOpening.js') }}"></script>
</body>

</html>
