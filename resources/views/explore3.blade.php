@extends('layouts.main', ['isExplore2' => true])

@section('title', 'Beauty of Indonesia')

<link rel="stylesheet" href="{{ url('css/preview_islands.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">



@section('content')
   <section class="home">
      <video src="{{ url('videos/background.mp4') }}" class="video-slide active" autoplay muted loop></video>
      <video src="{{ url('videos/background.mp4') }}" class="video-slide" autoplay muted loop></video>
      <video src="{{ url('videos/oke.mp4') }}" class="video-slide" autoplay muted loop></video>
      <video src="{{ url('videos/background.mp4') }}" class="video-slide" autoplay muted loop></video>
      <video src="{{ url('videos/sumatera.mp4') }}" class="video-slide" autoplay muted loop></video>
      <video src="{{ url('videos/background.mp4') }}" class="video-slide" autoplay muted loop></video>
      <!-- SLIDE 1 -->
      <div class="content active">
         <h1>WONDERFUL. <br><span>SUMATERA</span></h1>
         <p>SUMATERA adalah pulau keenam terbesar di dunia yang terletak di Indonesia, dengan luas 473.481 km². Penduduk
            pulau ini sekitar 57.940.351 (sensus 2018).
            Pulau ini dikenal pula dengan nama lain yaitu Pulau Percha, Andalas, atau Suwarnadwipa (bahasa Sanskerta,
            berarti "pulau emas").
            <small><span>source by : wikipedia and </span></small>
         </p>
         <a href="{{ route('explore.detail-explore') }}">Read More</a>
      </div>
      <!-- SLIDE 2 -->
      <div class="content">
         <h1>WONDERFUL. <br><span>JAVA</span></h1>
         <p>Pulau Jawa memiliki luas mencapai 126.700 km persegi. Jawa pun dinobatkan sebagai pulau terbesar ke-5 di
            Indonesia. Terdapat 6 provinsi dalam Pulau Jawa,
            yakni Banten, DKI Jakarta, Jawa Barat, Jawa Tengah, Daerah Istimewa Yogyakarta, dan Jawa Timur. Pulau Jawa
            dikenal sebagai salah satu daerah yang subur.</p>
         <a href="{{ route('explore.detail-explore') }}">Read More</a>
      </div>
      <!-- SLIDE 3 -->
      <div class="content">
         <h1>WONDERFUL. <br><span>KALIMANTAN</span></h1>
         <p>Pulau Kalimantan terletak antara pulau Sumatra dan Sulawesi dengan luas wilayah 736.000 km3. Literatur barat
            umumnya menyebut Kalimantan dengan nama Borneo yang berasal dari kata Brunai.
            Kesultanan Brunei yang terletak di pesisir utara dahulu pernah menguasai sebagian besar wilayah barat serta
            utara pulau Kalimantan.</p>
         <a href="{{ route('explore.detail-explore') }}">Read More</a>
      </div>
      <!-- SLIDE 4 -->
      <div class="content">
         <h1>WONDERFUL. <br><span>SULAWESI</span></h1>
         <p>Sulawesi adalah pulau terbesar kesebelas di dunia dan meliputi area seluas 174.600 km2. Bagian tengah pulau
            ini bergunung-gunung dengan permukaan kasar sehingga semenanjung di Sulawesi
            pada dasarnya jauh satu sama lain dan lebih mudah dijangkau melalui laut daripada melalui jalan darat.</p>
         <a href="{{ route('explore.detail-explore') }}">Read More</a>
      </div>
      <!-- SLIDE 5 -->
      <div class="content">
         <h1>WONDERFUL. <br><span>BALI</span></h1>
         <p>Bali adalah pulau yang sangat indah dengan panjang garis pantai sekitar 633,35 km. Di Pulau Bali terdapat
            gunung berapi, sungai-sungai, dan danau.
            Keberadaan gunung berapi memberikan kesuburan tanah untuk usaha pertanian. Gunung berapi di Pulau Bali
            adalah Gunung Batur dan Gunung Agung.</p>
         <a href="{{ route('explore.detail-explore') }}">Read More</a>
      </div>
      <!-- SLIDE 6 -->
      <div class="content">
         <h1>WONDERFUL. <br><span>PAPUA</span></h1>
         <p>Papua terletak pada posisi 0° 19` s.d. 10° 45` LS dan 130° 45` - 141° 48` BT, menempati setengah bagian
            Barat dari pulau Papua (juga dikenal dunia
            internasional dengan pulau New Guinea) yang merupakan pulau terbesar kedua setelah Greenland yang terletak
            di belahan Utara bumi.</p>
         <a href="{{ route('explore.detail-explore') }}">Read More</a>
      </div>
      <div class="media-icons">
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
         <a href="#"><i class="fab fa-github"></i></a>
      </div>
      <div class="slider-navigation">
         <div class="nav-btn active"></div>
         <div class="nav-btn"></div>
         <div class="nav-btn"></div>
         <div class="nav-btn"></div>
         <div class="nav-btn"></div>
         <div class="nav-btn"></div>
      </div>
   <script type="text/javascript">
      // javascript for video slider navigation
      const btns = document.querySelectorAll(".nav-btn");
      const slides = document.querySelectorAll(".video-slide");
      const contents = document.querySelectorAll(".content");

      var sliderNav = function(manual) {

         btns.forEach((btn) => {
            btn.classList.remove("active");
         });

         slides.forEach((slide) => {
            slide.classList.remove("active");
         });

         contents.forEach((content) => {
            content.classList.remove("active");
         });

         btns[manual].classList.add("active");
         slides[manual].classList.add("active");
         contents[manual].classList.add("active");
      }
      btns.forEach((btn, i) => {
         btn.addEventListener("click", () => {
            sliderNav(i)
         });
      });
   </script>
   </section>
   
   @endsection