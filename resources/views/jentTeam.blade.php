@extends('Layouts.main', ['isTeam' => true])

@section('title', 'JentTeam')


{{-- TEAM SLIDER --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
<!-- fontawesome -->
<script src="https:kit.fontawesome.com/6bd6c771de.js" crossorigin="anonymous"></script>
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ url('css/styleteam.css') }}">


@section('content')
   <!-- TEAM -->
   <section id="team">
      <!-- heading -->
      <div class="team-heading">
         <h3></h3>
      </div>

      <!-- slider -->
      <div class="swiper mySwiper">
         <div class="swiper-wrapper">

            <!-- slider 1 -->
            <div class="swiper-slide">
               <!-- TEAM BOX -->
               <div class="team-box">
                  <div class="t-b-img">
                     <img src="{{ url('images/team/author-02.jpg') }}" alt="nama">
                  </div>
                  <!-- text -->
                  <div class="t-b-text">
                     <span id="nama1"><strong>ADELIA KHANSA</strong></span>
                     <span id="nim1">220535601276</span>
                     <!-- social -->
                    </div>
                    <div class="team-social">
                       <a href="https://instagram.com/addeliakhansa?igshid=OTk0YzhjMDVlZA==">
                          <i class="fab fa-instagram"></i>
                       </a>
                       <a href="https://github.com/adeliakhansa">
                          <i class="fab fa-github"></i>
                       </a>
                       <a href="https://wa.me/+6285784095638">
                          <i class="fa fa-whatsapp"></i>
                       </a>

                    </div>
               </div><!-- team-box-end -->
            </div><!-- slide-box-end -->

            <!-- slider 2 -->
            <div class="swiper-slide">
               <!-- TEAM BOX -->
               <div class="team-box">
                  <div class="t-b-img">
                     <img src="{{ url('images/team/author-03.jpg') }}" alt="nama">
                  </div>
                  <!-- text -->
                  <div class="t-b-text">
                     <span id="nama2"><strong>AVAN FABIAN</strong></span>
                     <span id="nim2">NIM</span>
                     <!-- social -->
                     <div class="team-social">
                        <a href="#">
                           <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://github.com/AvanFabian">
                           <i class="fab fa-github"></i>
                        </a>
                        <a href="https://wa.me/+6281234566046">
                           <i class="fa fa-whatsapp"></i>
                        </a>

                     </div>
                  </div>
               </div><!-- team-box-end -->
            </div><!-- slide-box-end -->


            <!-- slider 3 -->
            <div class="swiper-slide">
               <!-- TEAM BOX -->
               <div class="team-box">
                  <div class="t-b-img">
                     <img src="{{ url('images/team/author-03.jpg') }}" alt="nama">
                  </div>
                  <!-- text -->
                  <div class="t-b-text">
                     <span id="nama3"><strong>ALFAJ SYAHRIZAL I</strong></span>
                     <span id="nim3">BIM</span>
                     <!-- social -->
                     <div class="team-social">
                        <a href="#">
                           <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-github"></i>
                        </a>
                        <a href="https://wa.me/+628594297530">
                           <i class="fa fa-whatsapp"></i>
                        </a>

                     </div>
                  </div>
               </div><!-- team-box-end -->
            </div><!-- slide-box-end -->

            <!-- slider 4 -->
            <div class="swiper-slide">
               <!-- TEAM BOX -->
               <div class="team-box">
                  <div class="t-b-img">
                     <img src="{{ url('images/team/author-03.jpg') }}" alt="nama">
                  </div>
                  <!-- text -->
                  <div class="t-b-text">
                     <span id="nama4"><strong>DITA ANGGRAINI</strong></span>
                     <span id="nim4">NIM</span>
                     <!-- social -->
                     <div class="team-social">
                        <a href="#">
                           <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-github"></i>
                        </a>
                        <a href="https://wa.me/+6281907548121">
                           <i class="fa fa-whatsapp"></i>
                        </a>
                     </div>
                  </div>
               </div><!-- team-box-end -->
            </div><!-- slide-box-end -->
         </div> <!-- wapper end -->
      </div> <!-- swiper-container-end -->
   </section>
   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <!-- Initialize Swiper -->
   <script>
      var swiper = new Swiper(".mySwiper", {
         effect: "coverflow",
         grabCursor: true,
         centeredSlides: true,
         slidesPerView: "auto",
         coverflowEffect: {
            rotate: 50,
            stretch: -20,
            depth: 120,
            modifier: 3,
            slideShadows: true,
         },
      });
   </script>

@endsection
