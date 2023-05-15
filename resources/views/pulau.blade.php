@extends('Layouts.main', ['isPulau' => true])
@section('title', 'Jelajah Nusantara')

<link rel="stylesheet" href="{{ url('css/pulau.css') }}">
<link href="{{ url('css/elemenOpening.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

@section('content')

   <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators" data-aos="zoom-in-up"
      data-aos-offset="120" data-aos-delay="20" data-aos-duration="800" data-aos-easing="ease-in-out-cubic"
      data-aos-mirror="true">
      <div class="carousel-indicators">
         <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators"
            type="button"></button>
         <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators"
            type="button"></button>
         <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators"
            type="button"></button>
         <button aria-label="Slide 4" data-bs-slide-to="3" data-bs-target="#carouselExampleIndicators"
            type="button"></button>
         <button aria-label="Slide 5" data-bs-slide-to="4" data-bs-target="#carouselExampleIndicators"
            type="button"></button>
         <button aria-label="Slide 6" data-bs-slide-to="5" data-bs-target="#carouselExampleIndicators"
            type="button"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-1.jpg') }}">
            <div class="carousel-caption">
               <h5>Your Dream House</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                  quas vero.</p>
               <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
            </div>
         </div>
         <div class="carousel-item">
            <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-2.jpg') }}">
            <div class="carousel-caption">
               <h5>Always Dedicated</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                  quas vero.</p>
               <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
            </div>
         </div>
         <div class="carousel-item">
            <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-3.jpg') }}">
            <div class="carousel-caption">
               <h5>True Construction</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                  quas vero.</p>
               <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
            </div>
         </div>
         <div class="carousel-item">
            <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-1.jpg') }}">
            <div class="carousel-caption">
               <h5>True Construction</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                  quas vero.</p>
               <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
            </div>
         </div>
         <div class="carousel-item">
            <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-2.jpg') }}">
            <div class="carousel-caption">
               <h5>True Construction</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                  quas vero.</p>
               <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
            </div>
         </div>
         <div class="carousel-item">
            <img alt="pulau_indonesia" class="d-block w-100" src="{{ asset('images/project-1-img/home-3.jpg') }}">
            <div class="carousel-caption">
               <h5>True Construction</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi
                  quas vero.</p>
               <p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
            </div>
         </div>
      </div>
      <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
         type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
            class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators"
         type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span
            class="visually-hidden">Next</span>
      </button>
   </div>

   <!-- ======= Top Konten ======= -->
   <section id="portfolio" class="portfolio">

      <div class="container" data-aos="zoom-in-up" data-aos-offset="120" data-aos-delay="20" data-aos-duration="800"
         data-aos-easing="ease-in-out-cubic" data-aos-mirror="true">

         <header class="section-header">
            <h2>Top Contents</h2>
            <p>Most Viewed Contents</p>
         </header>

         <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
               <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">See All Contents</li>
               </ul>
            </div>
         </div>

         <div class="row gy-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
               <div class="portfolio-wrap">
                  <img src="{{ url('img/portfolio-1.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                     <h4>App 1</h4>
                     <p>App</p>
                     <div class="portfolio-links">
                        <a href="{{ url('img/portfolio-1.jpg') }}" data-gallery="portfolioGallery"
                           class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                        <a href="" title="More Details"><i class="bi bi-link"></i></a>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
               <div class="portfolio-wrap">
                  <img src="{{ url('img/portfolio-2.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                     <h4>Web 3</h4>
                     <p>Web</p>
                     <div class="portfolio-links">
                        <a href="{{ url('img/portfolio-2.jpg') }}" data-gallery="portfolioGallery"
                           class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                        <a href="" title="More Details"><i class="bi bi-link"></i></a>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
               <div class="portfolio-wrap">
                  <img src="{{ url('img/portfolio-3.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                     <h4>App 2</h4>
                     <p>App</p>
                     <div class="portfolio-links">
                        <a href="{{ url('img/portfolio-3.jpg') }}" data-gallery="portfolioGallery"
                           class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                        <a href="" title="More Details"><i class="bi bi-link"></i></a>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
               <div class="portfolio-wrap">
                  <img src="{{ url('images/portfolio-4.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                     <h4>Card 2</h4>
                     <p>Card</p>
                     <div class="portfolio-links">
                        <a href="{{ url('images/portfolio-4.jpg') }}" data-gallery="portfolioGallery"
                           class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                        <a href="" title="More Details"><i class="bi bi-link"></i></a>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
               <div class="portfolio-wrap">
                  <img src="{{ url('images/portfolio-5.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                     <h4>Web 2</h4>
                     <p>Web</p>
                     <div class="portfolio-links">
                        <a href="{{ url('images/portfolio-5.jpg') }}" data-gallery="portfolioGallery"
                           class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                        <a href="" title="More Details"><i class="bi bi-link"></i></a>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
               <div class="portfolio-wrap">
                  <img src="{{ url('images/portfolio-6.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                     <h4>App 3</h4>
                     <p>App</p>
                     <div class="portfolio-links">
                        <a href="{{ url('images/portfolio-6.jpg') }}" data-gallery="portfolioGallery"
                           class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                        <a href="" title="More Details"><i class="bi bi-link"></i></a>
                     </div>
                  </div>
               </div>
            </div>

         </div>

      </div>

   </section>
   <!-- End Top Konten -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">

      <div class="container child" id="kontak" data-aos="zoom-out-up" data-aos-offset="300" data-aos-delay="20"
         data-aos-duration="800" data-aos-easing="ease-in-out-quart" data-aos-mirror="true">
         <header class="section-header">
            <h2>Our Services</h2>
            <p>Give us feedback and suggestions</p>
         </header>

         <div class="row gy-4">

            <div class="col-lg-6">

               <div class="row gy-4">
                  <div class="col-md-6">
                     <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <p>Jalan Semarang No.12,<br>Kota Malang, 67262</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="info-box">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>+62 822 324 212 11<br>+62 821 556 226 22</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="info-box">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>jentarateam@gmail.com<br>admin2@gmail.com</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="info-box">
                        <i class="bi bi-clock"></i>
                        <h3>Admin Active Hours</h3>
                        <p>EveryDay<br>9:00AM - 05:00PM</p>
                     </div>
                  </div>
               </div>

            </div>

            <div class="col-lg-6">
               <form action="{{ route('saran.store') }}" method="POST">
                  @csrf
                  <div class="row gy-4">

                     <div class="col-md-6">
                        <input type="text" id="name" name="name" class="form-control"
                           placeholder="Your Name" required>
                     </div>

                     <div class="col-md-6 ">
                        <input type="email" id="email" class="form-control" name="email"
                           placeholder="Your Email" required>
                     </div>

                     <div class="col-md-12">
                        <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject"
                           required>
                     </div>

                     <div class="col-md-12">
                        <textarea id="advice" class="form-control" name="advice" rows="6" placeholder="Your Feedback" required></textarea>
                     </div>

                     <div class="col-md-12 text-center">
                        @if (session('success'))
                           <div class="alert alert-success alert-dismissible" role="alert">
                              {{ session('success') }}
                              <button type="button" class="btn-close" data-bs-dismiss="alert"
                                 aria-label="Close"></button>
                           </div>
                        @endif

                        <button type="submit" id="submit-advice" class="btn btn-primary">Submit</button>
                        <a href="{{ route('update-advice') }}" class="btn btn-danger">History</a>

                     </div>

                  </div>
               </form>

            </div>

         </div>

      </div>

   </section><!-- End Contact Section -->

   <!-- ======= Footer ======= -->
   <section id="footer" class="footer">

      <div class="footer-newsletter">
         <div class="container" id="footer-news" data-aos="fade-right" data-aos-offset="300" data-aos-delay="20"
            data-aos-duration="800" data-aos-easing="ease-in-out-quart" data-aos-mirror="true">
            <div class="row justify-content-center">
               <div class="col-lg-12 text-center">
                  <h4>Our Newsletter</h4>
                  <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
               </div>
               <div class="col-lg-6">
                  <form action="" method="post">
                     <input type="email" name="email"><input type="submit" value="Subscribe">
                  </form>
               </div>
            </div>
         </div>
      </div>

      <div class="footer-top">
         <div class="container" data-aos="fade-left" data-aos-offset="300" data-aos-delay="20" data-aos-duration="800"
            data-aos-easing="ease-in-out-quart" data-aos-mirror="true">
            <div class="row gy-4">
               <div class="col-lg-5 col-md-12 footer-info">
                  <a href="/pulau" class="logo d-flex align-items-center">
                     <img src="{{ url('images/author.jpg') }}" alt="">
                     <span>Jelajah Nusantara</span>
                  </a>
                  <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies
                     darta donna mare fermentum iaculis eu non diam phasellus.</p>
                  <div class="social-links mt-3">
                     <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                     <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                     <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                     <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
               </div>

               <div class="col-lg-2 col-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                     <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                     <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                     <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                     <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                     <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                  </ul>
               </div>

               <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                  <h4>Contact Us</h4>
                  <p>
                     Jalan Semarang No.12 <br>
                     Kota Malang, 67262<br>
                     Indonesia <br><br>
                     <strong>Telepon:</strong> +62 822 324 212 11<br>
                     <strong>Email:</strong> info@example.com<br>
                  </p>

               </div>

            </div>
         </div>
      </div>
   </section><!-- End Footer -->

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
@endsection
