<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield ('title')</title>
   {{-- Css --}}
   {{-- Font --}}
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
   <link href='https://fonts.googleapis.com/css?family=Nerko+One' rel='stylesheet'>
   <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
   {{-- Icon Browser & Bootstrap yang diterapkan ke semua page --}}
   <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ url('css/fontawesome.css') }}">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="{{ url('css/mainContent.css') }}">
   <link href="{{ url('bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link rel="shortcut icon" type="image/png" href="{{ url('images/IndonesiaBendera.png') }}">
</head>

<body>
   @if (!isset($isCover) && !isset($isRegister) && !isset($isExplore2))
   <div class="page-content">
      {{-- Navbar --}}
         {{-- Jika bukan halaman Cover maka jangan load kode dibawah --}}
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container d-flex justify-content-between">
               <a class="navbar-brand" href="#"><span class="text-danger">Jelajah</span>Nusantara</a> <button
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                  class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
                  type="button"><span class="navbar-toggler-icon"></span></button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Top Contents</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/home/explore">Explore</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">FeedBack</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/home/our-team"><i class="fa fa-user-o"></i>Our Team</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      @endif {{-- Akhiri pengecekan halaman Cover --}}
      {{-- EndNavbar --}}
      {{-- ContentStart --}}
      @if (isset($isExplore2) || isset($isRegister))
         @yield('content')
      @else
         <div class="main-content">
            @yield('content')
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                  class="bi bi-arrow-up-short"></i></a>
         </div>
      @endif
      {{-- EndContent --}}
      {{-- Footer --}}
      @if (!isset($isCover) && !isset($isRegister) && !isset($isExplore2))
         {{-- Jika bukan halaman Cover maka jangan load kode dibawah --}}
         <footer class="bg-dark p-2 text-center page-footer">
            <div class="container">
               <p class="body-md text-center text-white copyright">
                  &copy; 2023 Jentara. Developed with <span class="span">❤</span> by JentTeam.
               </p>
            </div>
         </footer>
      @endif {{-- Akhiri pengecekan halaman Cover --}}
      {{-- EndFooter --}}
   </div>
   {{-- Script Start --}}
   @if (isset($isPulau))
      {{-- Jika halaman Cover maka load kode dibawah --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ url('js/elemenOpening.js') }}"></script>
   @endif
   {{-- <script src="{{ url('js/Jquery.js') }}"></script> --}}
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   {{-- @yield('scripts') --}}
   {{-- Script End --}}
</body>

</html>
