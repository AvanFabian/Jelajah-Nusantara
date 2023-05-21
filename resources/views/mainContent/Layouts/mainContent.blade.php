<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   {{-- Csrf --}}
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- Yield title --}}
   <title>@yield('title')</title>
   <!-- font dan icon -->
   <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fresco/2.2.0/css/fresco/fresco.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <!-- roboto google -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
   <!-- fancy box css -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
   {{-- Link css --}}
   <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/mainContent/slicknav.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/mainContent/fresco.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/mainContent/scroll.css') }}">
   <link rel="stylesheet" href="{{ asset('css/mainContent/slick.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/mainContent/style.css') }}" />
</head>

<body>

   @include('mainContent.Layouts.header')
   @yield('content')
   @include('mainContent.Layouts.footer')


   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <script src="{{ asset('js/mainContent/vendor/jquery-3.2.1.min.js') }}" type="c9d799abd53976f1bdea3c0d-text/javascript"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous" type="c9d799abd53976f1bdea3c0d-text/javascript"></script>

   <script src="{{ asset('js/mainContent/fonts/icons.js') }}" type="c9d799abd53976f1bdea3c0d-text/javascript"></script>

   <script src="{{ asset('js/mainContent/jquery.slicknav.min.js') }}" type="c9d799abd53976f1bdea3c0d-text/javascript"></script>

   <script src="{{ asset('js/mainContent/slick.min.js') }}" type="c9d799abd53976f1bdea3c0d-text/javascript"></script>

   <script src="{{ asset('js/mainContent/fresco.min.js') }}" type="c9d799abd53976f1bdea3c0d-text/javascript"></script>

   <script src="({{ asset('js/mainContent/main.js') }})" type="c9d799abd53976f1bdea3c0d-text/javascript"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fresco/2.3.0/fresco.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

   <script src="{{ asset('js/loadMainContent.js') }}"></script>
</body>

</html>
