@extends('Layouts.main', ['isCover' => true])

@section('title', 'Bersiap Menjelajah')

<link rel="preload" href="{{ url('img/oke.mp4') }}" as="video" type="video/mp4" crossorigin="anonymous" preload="metadata">
<link rel="stylesheet" href="{{ url('css/cover.css') }}">

{{-- Additional Page Style --}}
   <style>
      .text-custom {
         text-decoration: none;
         color: #3b3432;
      }
   </style>
{{-- End Additional Page Style --}}
@section('content')
   <div class="cover">
      <!-- TITLE -->
      <div class="wrapper">
         <div class="static-txt" data-text="JENTARA">JENTARA</div>
      </div>
      <!-- COVER -->
      <div class="container" id="blur">
         <div class="banner">
            <video autoplay muted loop src="{{ url('videos/oke.mp4') }}" type="video/mp4"></video>
         </div>
         <!-- BUTTON COVER -->
         <div class="toplayer">
            <a class="boton" onclick="toggle()">Start Now !</a>
         </div>
         <!-- POP UP -->
         <div class="popup" id="popup">
            <div class="close close-btn" onclick="toggle()">
               <ion-icon name="close-outline"></ion-icon>
            </div>
            <h2 class="text-center">CHOOSE
               <br />
               <div class="row mt-3">
                  <div class="col-12">
                     <button type="button"><a class="text-custom" href="/register">SignUp</a></button>
                  </div>
               </div>
               <div class="row mt-4">
                  <div class="col-12">
                     <button type="button"><a class="text-custom" href="/login">SignIn</a></button>
                  </div>
               </div>
               <div class="row mt-4">
                  <div class="col-12">
                     <button type="button"><a class="text-custom" href="/home/pulau" id="island-btn">Visitor</a></button>
                  </div>
               </div>
         </div>
      </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="{{ url('js/script.js') }}"></script>
   <script
     type="module"
     src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
