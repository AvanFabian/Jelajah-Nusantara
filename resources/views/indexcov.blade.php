@extends('Layouts.main', ['isCover' => true])

@section('content')
   <div class="cover">
      <!-- TITLE -->
      <div class="wrapper">
         <div class="static-txt" data-text="JENTARA">JENTARA</div>
      </div>
      <!-- COVER -->
      <div class="container" id="blur">
         <div class="banner">
            <video autoplay muted loop src="{{ url('img/oke.mp4') }}" type="video/mp4"></video>
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
                     <button type="button"><a class="text-custom" href="{{ route('login') }}">Sign Up</a></button>
                  </div>
               </div>
                <div class="row mt-4">
                    <div class="col-12">
                      {{-- <button type="button"><a class="text-custom" href="{{ route('login') }}">Sign In</a></button> --}}
                      <button type="button"><a class="text-custom" href="/home/pulau">Sign In</a></button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                      <button type="button"><a class="text-custom" href="/home/pulau"
                            id="island-btn">Visitor</a></button>
                    </div>
                </div>
         </div>
      </div>
   </div>
@section('scripts')
   <script defer>
      function toggle() {
         var blur = document.getElementById("blur");
         blur.classList.toggle("active");
         var popup = document.getElementById("popup");
         popup.classList.toggle("active");
      }
   </script>
   <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script defer src="{{ url('js/script.js') }}"></script>
   <script defer
     type="module"
     src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
   <script defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
