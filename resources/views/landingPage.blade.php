@extends('Layouts.main', ['isCover' => true])

@section('title', 'Bersiap Menjelajah')

<link rel="stylesheet" href="{{ url('css/cover.css') }}">

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
            <h2 class="text-center">CHOOSE</h2>
            <div class="row mt-4">
               <div class="col-12 text-center mt-4">
                  {{-- Button onclick js --}}
                  <button type="button" onclick="location.href='/register'" class="btn-custom">Sign Up</button>
               </div>
               <div class="col-12 text-center mt-4">
                  <button type="button" onclick="location.href='/login'" class="btn-custom">Sign In</button>
               </div>
               <div class="col-12 text-center mt-4">
                  <button type="button" class="btn-custom" id="open">Visitor</button>  
               </div>
            </div>
         </div>
         
         
          


<!-- POP UP -->
<div class="model-container">
   <div class="model">
     <i class="fas fa-heart"></i>
     <h3>SELAMAT DATANG JENTARIAN!</h3>
     <p>Mari mulai petualanganmu sekarang juga! <br> Ketahui lebih banyak tentang Budaya Bangsa, 
       <br> Ajining Diri Saka Lathi, Ajining Bangsa Gumantung Luhure Budaya
       <br> Salam Budaya !
     </p>
     <button href="/home/pulau"><a href="/home/pulau" style="text-decoration: none; color: white;">Next</a></button>
     <button>Gabung Jent!</button>
     <i id="close" class="fas fa-times"></i>
   </div>
 </div>
 <!-- END POP UP -->



   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="{{ url('js/script.js') }}"></script>


   <script
     type="module"
     src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="{{ url('js/indexcov.js') }}"></script>
   <script type="text/javascript">
      $(document).ready()
   </script>
@endsection
