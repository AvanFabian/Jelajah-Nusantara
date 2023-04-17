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

    @if (isset($isCover))
      {{-- Jika halaman Cover maka load kode dibawah --}}
        <link rel="stylesheet" href="{{ url('css/mainContent.css') }}">
        <link rel="stylesheet" href="{{ url('css/cover.css') }}">
        <link rel="prefetch" href="{{ url('css/mainContent.css') }}">
        <link rel="prefetch" href="{{ url('css/cover.css') }}">
    @elseif(isset($isExplore))
      {{-- Jika halaman Explore maka load kode dibawah --}}
        <link rel="stylesheet" href="{{ url('css/explore.css') }}">
        <link rel="stylesheet" href="{{ url('css/mainContent.css') }}">
        <link rel="prefetch" href="{{ url('css/explore.css') }}">
        <link rel="prefetch" href="{{ url('css/mainContent.css') }}">
    @elseif(isset($isPulau))
        {{-- Jika halaman Pulau maka load kode dibawah --}}
            <link rel="stylesheet" href="{{ url('css/pulau.css') }}">
            <link rel="stylesheet" href="{{ url('css/mainContent.css') }}">
            <link rel="prefetch" href="{{ url('css/pulau.css') }}">
            <link rel="prefetch" href="{{ url('css/mainContent.css') }}">

    @else
      {{-- Jika halaman lainnya maka load kode dibawah --}}
        <link rel="stylesheet" href="{{ url('css/mainContent.css') }}">
    @endif
    <link rel="shortcut icon" type="image/png" href="{{ url('images/IndonesiaBendera.png') }}">
</head>

<body>
    <div class="page-content">
        {{-- Navbar --}}
        @if (!isset($isCover))
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
                                <a class="nav-link" href="/">Preview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/explore-budaya">Ayoo Jelajahi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/tim-kita"><i class="fa fa-user-o"></i>Team Detail</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="search" class="form-control ps-2 pe-5" placeholder="Cari...">
                                </div>
                        </div>
                        <div class="col-md-6">
                            <form method="GET" action="">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-search me-2"></i>Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        @endif {{-- Akhiri pengecekan halaman Cover --}}
        {{-- EndNavbar --}}

        {{-- ContentStart --}}
        <div class="main-content">
            @yield('content')
        </div>
        {{-- EndContent --}}

        {{-- Footer --}}
        @if (!isset($isCover))
            {{-- Jika bukan halaman Cover maka jangan load kode dibawah --}}
            <footer class="bg-dark p-2 text-center page-footer">
                <div class="container">
                    <p class="text-white">All Right Reserved By JENT TEAM</p>
                </div>
            </footer>
        @endif {{-- Akhiri pengecekan halaman Cover --}}
        {{-- EndFooter --}}
    </div>
    {{-- Script Start --}}
    <script src="{{ url('jquery/jquery.min.js') }}"></script>
    <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
    {{-- Script End --}}
</body>

</html>
