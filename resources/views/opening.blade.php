<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--- primary meta tags -->
  <title>JENTARA</title>
  <meta name="title" content="Metalink - Discover rate collection or Arts & NFTs">
  <meta name="description" content="This is a NFT html template made by codewithsadee">
  <!--- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <!--- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!--- custom css and js link -->
  <link rel="stylesheet" href="{{ url('css/opening.css') }}">
  <script src="{{ url('js/perkenalan.js') }}"></script>
</head>

<body id="top">

  <!--- #HEADER -->

  <header class="header" data-header>
    <div class="container">

      <a href="#">
        <!-- LOGO -->
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#dashboard" class="navbar-link label-lg link:hover">Dashboard</a>
          </li>

          <li>
            <a href="#content" class="navbar-link label-lg link:hover">Content</a>
          </li>

          <li>
            <a href="#JentTeam" class="navbar-link label-lg link:hover">JentTeam</a>
          </li>

          <li>
            <a href="#qna" class="navbar-link label-lg link:hover">QnA</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link label-lg link:hover">Contact</a>
          </li>

        </ul>
      </nav>

      <!-- <div class="header-action">
        <button class="btn-icon primary" aria-label="wallet">
          <ion-icon name="play -outline"></ion-icon>
        </button>
        </div> -->
        <button class="nav-toggle-btn" aria-label="menu toggle" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true" class="default-icon"></ion-icon>

          <ion-icon name="close-outline" aria-hidden="true" class="active-icon"></ion-icon>
        </button>

      </div>

    </div>
  </header>



  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home" style="background-image: url('img/mapind.jpg');" >
        <div class="container" style="margin-">

          <h1 class="headline-lg hero-title">
           Jelajah Alam Nusantara <span class="span" style="font-size: 2em;"> <br> JENTARA</span>
          </h1>

          <p class="section-text body-lg" style="text-decoration-color: #F5E8C7">
            Kesempatanmu untuk mengungkap misteri dan keajaiban Nusantara yang belum pernah kamu lihat. Siapkah kamu untuk menjelajah dengan kami?
          </p>

          <a href="{{ route('home') }}" class="btn" style="background-color: #d3a27f;">Explore now</a>

        </div>
      </section>





      <!-- 
        - #TOP COLLECTION
      -->

      <section class="section top-collection" aria-labelledby="collection-label" id="content">
        <div class="container">

          <div class="container">
            <h2 class="headline-md section-title text-center" id="collection-label">Top Konten</h2>
          </div>

          <div class="slider" data-slider>

            <ul class="slider-container" data-slider-container>

              <li class="slider-item">
                <div class="collection-card card">

                  <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                    <img src="https://img.freepik.com/free-vector/illustration-lock-icon_53876-5633.jpg?w=740&t=st=1678741192~exp=1678741792~hmac=4064f15a1a80475d3b5e7936fe19fb538e83e37e94289af899619a8da075ce49" width="500" height="500" loading="lazy"
                      alt="Digital Collection" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <div class="card-profile">
                      <img src="https://img2.pngdownload.id/20180509/seq/kisspng-padlock-vecteur-tool-5af36174668a17.49595669152589963642.jpg" width="64" height="64" loading="lazy"
                        alt="CutieGirl profile">

                      <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                    </div>

                    <h3 class="title-md card-title">
                      <a href="#" class="link:hover">Misteri Alam</a>
                    </h3>

                    <p class="label-md card-author">
                      by <a href="https://www.youtube.com/@GromoreStudio" class="link">@JentTeam
                      </a>
                    </p>

                    <p class="card-text">Unlocked!</p>

                  </div>

                </div>
              </li>

              <li class="slider-item">
                <div class="collection-card card">

                  <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                    <img src="https://img.freepik.com/free-vector/illustration-lock-icon_53876-5633.jpg?w=740&t=st=1678741192~exp=1678741792~hmac=4064f15a1a80475d3b5e7936fe19fb538e83e37e94289af899619a8da075ce49" width="500" height="500" loading="lazy"
                      alt="GIF Collection" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <div class="card-profile">
                      <img src="https://img2.pngdownload.id/20180509/seq/kisspng-padlock-vecteur-tool-5af36174668a17.49595669152589963642.jpg" width="64" height="64" loading="lazy"
                        alt="ButterFly profile">

                      <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                    </div>

                    <h3 class="title-md card-title">
                      <a href="" class="link:hover">Untaian Kata Bermakna</a>
                    </h3>

                    <p class="label-md card-author">
                      by <a href="" class="link">@JentTeam</a>
                    </p>

                    <p class="card-text">Unlocked!</p>

                  </div>

                </div>
              </li>

              <li class="slider-item">
                <div class="collection-card card">

                  <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                    <img src="https://img.freepik.com/free-vector/illustration-lock-icon_53876-5633.jpg?w=740&t=st=1678741192~exp=1678741792~hmac=4064f15a1a80475d3b5e7936fe19fb538e83e37e94289af899619a8da075ce49" width="500" height="500" loading="lazy"
                      alt="Sports Collection" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <div class="card-profile">
                      <img src="https://img2.pngdownload.id/20180509/seq/kisspng-padlock-vecteur-tool-5af36174668a17.49595669152589963642.jpg" width="64" height="64" loading="lazy"
                        alt="NorseQueen profile">

                      <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                    </div>

                    <h3 class="title-md card-title">
                      <a href="https://www.youtube.com/watch?v=2YNxfrbPZig" class="link:hover">Musikalitas Misterius</a>
                    </h3>

                    <p class="label-md card-author">
                      by <a href="" class="link">@JentTeam</a>
                    </p>

                    <p class="card-text">Unlocked</p>

                  </div>

                </div>
              </li>

              <li class="slider-item">
                <div class="collection-card card">

                  <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                    <img src="https://img.freepik.com/free-vector/illustration-lock-icon_53876-5633.jpg?w=740&t=st=1678741192~exp=1678741792~hmac=4064f15a1a80475d3b5e7936fe19fb538e83e37e94289af899619a8da075ce49" width="500" height="500" loading="lazy"
                      alt="Photography Collection" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <div class="card-profile">
                      <img src="https://img2.pngdownload.id/20180509/seq/kisspng-padlock-vecteur-tool-5af36174668a17.49595669152589963642.jpg" width="64" height="64" loading="lazy"
                        alt="BigBull profile">

                      <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                    </div>

                    <h3 class="title-md card-title">
                      <a href="https://www.youtube.com/watch?v=0glckHsLL7U" class="link:hover">Kekuatan Alam</a>
                    </h3>

                    <p class="label-md card-author">
                      by <a href="#" class="link">@JentTeam</a>
                    </p>

                    <p class="card-text">Unlocked</p>

                  </div>

                </div>
              </li>

              <li class="slider-item">
                <div class="collection-card card">

                  <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                    <img src="https://img.freepik.com/free-vector/illustration-lock-icon_53876-5633.jpg?w=740&t=st=1678741192~exp=1678741792~hmac=4064f15a1a80475d3b5e7936fe19fb538e83e37e94289af899619a8da075ce49" width="500" height="500" loading="lazy"
                      alt="Photography Collection" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <div class="card-profile">
                      <img src="https://img2.pngdownload.id/20180509/seq/kisspng-padlock-vecteur-tool-5af36174668a17.49595669152589963642.jpg" width="64" height="64" loading="lazy"
                        alt="BigBull profile">

                      <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                    </div>

                    <h3 class="title-md card-title">
                      <a href="https://www.youtube.com/watch?v=0glckHsLL7U" class="link:hover">Locked!</a>
                    </h3>

                    <p class="label-md card-author">
                      by <a href="#" class="link">@JentTeam</a>
                    </p>

                    <p class="card-text">Unlocked</p>

                  </div>

                </div>
              </li>

              

            </ul>

            <button class="slider-btn prev" aria-label="Slide to previous item" data-slider-prev>
              <ion-icon name="chevron-back-sharp" aria-hidden="true"></ion-icon>
            </button>

            <button class="slider-btn next" aria-label="Slide to next item" data-slider-next>
              <ion-icon name="chevron-forward-sharp" aria-hidden="true"></ion-icon>
            </button>

          </div
        </div>
      </section>





      <!-- 
        - #DISCOVER ITEM
      -->

      <section class="section discover" aria-labelledby="discover-label" id="JentTeam">
        <div class="container">

          <h2 class="headline-md section-title text-center" id="discover-label">Meet Our Team !</h2>

          <ul class="grid-list">


            <li>
              <div class="discover-card card">

                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                  <img src="./assets/images/showcase-5.jpg" width="500" height="500" loading="lazy"
                    alt="back-end" class="img-cover">

                  <button class="btn btn-primary">
                    <ion-icon name="flash" aria-hidden="true"></ion-icon>

                    <span class="span">Back End</span>
                  </button>
                </div>

                <div class="card-profile">
                  <img src="https://cdn.pixabay.com/photo/2014/04/02/10/48/symbol-304598_960_720.png" width="32" height="32" loading="lazy" alt="NorseQueen profile"
                    class="img">

                  <a href="#" class="link:hover">@Adjent1</a>
                </div>

                <h3 class="title-sm card-title">
                  <a href="#" class="link:hover">Avan Fabian Daniswara</a>
                </h3>

                <div class="card-meta">

                  <div>
                    <p>NIM</p>

                    <div class="card-price">
                      <img src="https://um.ac.id/wp-content/uploads/2019/03/Lambang-UM.png" width="28" height="28" loading="lazy" alt="ethereum icon">

                      <span class="span">220535603620</span>
                    </div>
                  </div>

                  <!-- <div>
                    <p>Highest Bid</p>

                    <div class="card-price">
                      <img src="./assets/images/ethereum.svg" width="16" height="24" loading="lazy" alt="ethereum icon">

                      <span class="span">3.55 ETH</span>
                    </div>
                  </div>

                </div> -->

              </div>
            </li>

            <li>
              <div class="discover-card card">

                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                  <img src="aku.jpeg" width="500" height="500" loading="lazy"
                    alt="Front-End" class="img-cover">

                  <button class="btn btn-primary">
                    <ion-icon name="flash" aria-hidden="true"></ion-icon>

                    <span class="span">Front-End</span>
                  </button>
                </div>

                <div class="card-profile">
                  <img src="https://cdn.pixabay.com/photo/2014/04/02/10/48/symbol-304598_960_720.png" width="32" height="32" loading="lazy" alt="BigBull profile"
                    class="img">

                  <a href="#" class="link:hover">@Adjent2</a>
                </div>

                <h3 class="title-sm card-title">
                  <a href="#" class="link:hover">Adelia Khansa Ristiaputri</a>
                </h3>

                <div class="card-meta">

                  <div>
                    <p>Nim</p>

                    <div class="card-price">
                      <img src="https://um.ac.id/wp-content/uploads/2019/03/Lambang-UM.png" width="28" height="28" loading="lazy" alt="ethereum icon">

                      <span class="span">220535601276</span>
                    </div>
                  </div>

                  <!-- <div>
                    <p>Highest Bid</p>

                    <div class="card-price">
                      <img src="./assets/images/ethereum.svg" width="16" height="24" loading="lazy" alt="ethereum icon">

                      <span class="span">3.55 ETH</span>
                    </div>
                  </div> -->

                </div>

              </div>
            </li>

            <li>
              <div class="discover-card card">

                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                  <img src="./assets/images/showcase-3.jpg" width="500" height="500" loading="lazy"
                    alt="Front-End" class="img-cover">

                  <button class="btn btn-primary">
                    <ion-icon name="flash" aria-hidden="true"></ion-icon>

                    <span class="span">Front-End</span>
                  </button>
                </div>

                <div class="card-profile">
                  <img src="https://cdn.pixabay.com/photo/2014/04/02/10/48/symbol-304598_960_720.png" width="32" height="32" loading="lazy" alt="Angel profile"
                    class="img">

                  <a href="#" class="link:hover">@Adjent3</a>
                </div>

                <h3 class="title-sm card-title">
                  <a href="#" class="link:hover">Dita Anggraini Puspitasari</a>
                </h3>

                <div class="card-meta">

                  <div>
                    <p>NIM</p>

                    <div class="card-price">
                      <img src="https://um.ac.id/wp-content/uploads/2019/03/Lambang-UM.png" width="28" height="28" loading="lazy" alt="ethereum icon">

                      <span class="span">220535619256</span>
                    </div>
                  </div>

                  <div>
                    <!-- <p>Highest Bid</p>

                    <div class="card-price">
                      <img src="./assets/images/ethereum.svg" width="16" height="24" loading="lazy" alt="ethereum icon">

                      <span class="span">3.55 ETH</span>
                    </div>
                  </div> -->

                </div>

              </div>
            </li>

            <li>
              <div class="discover-card card">

                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                  <img src="./assets/images/showcase-1.jpg" width="500" height="500" loading="lazy" alt="Desain"
                    class="img-cover">

                  <button class="btn btn-primary">
                    <ion-icon name="flash" aria-hidden="true"></ion-icon>

                    <span class="span">Desain</span>
                  </button>
                </div>

                <div class="card-profile">
                  <img src="https://cdn.pixabay.com/photo/2014/04/02/10/48/symbol-304598_960_720.png" width="32" height="32" loading="lazy" alt="Princess profile"
                    class="img">

                  <a href="#" class="link:hover">@Adjent4</a>
                </div>

                <h3 class="title-sm card-title">
                  <a href="#" class="link:hover">Alfaj Syahrizal Izara</a>
                </h3>

                <div class="card-meta">

                  <div>
                    <p>Nim</p>

                    <div class="card-price">
                      <img src="https://um.ac.id/wp-content/uploads/2019/03/Lambang-UM.png" width="28" height="28" loading="lazy" alt="ethereum icon">

                      <span class="span">220535609188</span>
                    </div>
                  </div>

                  <!-- <div>
                    <p>Highest Bid</p>

                    <div class="card-price">
                      <img src="./assets/images/ethereum.svg" width="16" height="24" loading="lazy" alt="ethereum icon">

                      <span class="span">3.55 ETH</span>
                    </div>
                  </div> -->

                </div>

              </div>
            </li>

          </ul>
      </section>



<!-- 

        - SELLERS
      -->
<!-- 
      <section class="section sellers" aria-labelledby="sellers-label">
        <div class="container">

          <h2 class="headline-md section-title text-center" id="sellers-label">Best Creators & Sellers</h2>

          <ul class="grid-list">

            <li>
              <div class="seller-card card">

                <figure class="card-banner">
                  <img src="./assets/images/avatar-1.jpg" width="64" height="64" loading="lazy"
                    alt="Steven Townsend profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper">
                  <h3 class="title-sm">
                    <a href="#" class="link:hover">Steven Townsend</a>
                  </h3>

                  <p class="user-name label-md">@StreetBoy</p>
                </div>

                <button class="btn-icon outline" aria-label="Hire Steven Townsend">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="seller-card card">

                <figure class="card-banner">
                  <img src="./assets/images/avatar-2.jpg" width="64" height="64" loading="lazy"
                    alt="Tiffany Betancourt profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper">
                  <h3 class="title-sm">
                    <a href="#" class="link:hover">Tiffany Betancourt</a>
                  </h3>

                  <p class="user-name label-md">@CutieGirl</p>
                </div>

                <button class="btn-icon outline" aria-label="Hire Tiffany Betancourt">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="seller-card card">

                <figure class="card-banner">
                  <img src="./assets/images/avatar-3.jpg" width="64" height="64" loading="lazy"
                    alt="Jacqueline Burns profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper">
                  <h3 class="title-sm">
                    <a href="#" class="link:hover">Jacqueline Burns</a>
                  </h3>

                  <p class="user-name label-md">@ButterFly</p>
                </div>

                <button class="btn-icon outline" aria-label="Hire Jacqueline Burns">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="seller-card card">

                <figure class="card-banner">
                  <img src="./assets/images/avatar-4.jpg" width="64" height="64" loading="lazy"
                    alt="Mari Harrington profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper">
                  <h3 class="title-sm">
                    <a href="#" class="link:hover">Mari Harrington</a>
                  </h3>

                  <p class="user-name label-md">@NorseQueen</p>
                </div>

                <button class="btn-icon outline" aria-label="Hire Mari Harrington">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="seller-card card">

                <figure class="card-banner">
                  <img src="./assets/images/avatar-5.jpg" width="64" height="64" loading="lazy"
                    alt="Floyd Glasgow profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper">
                  <h3 class="title-sm">
                    <a href="#" class="link:hover">Floyd Glasgow</a>
                  </h3>

                  <p class="user-name label-md">@BigBull</p>
                </div>

                <button class="btn-icon outline" aria-label="Hire Floyd Glasgow">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="seller-card card">

                <figure class="card-banner">
                  <img src="./assets/images/avatar-6.gif" width="64" height="64" loading="lazy"
                    alt="Donna Schultz profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper">
                  <h3 class="title-sm">
                    <a href="#" class="link:hover">Donna Schultz</a>
                  </h3>

                  <p class="user-name label-md">@Angel</p>
                </div>

                <button class="btn-icon outline" aria-label="Hire Donna Schultz">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="seller-card card">

                <figure class="card-banner">
                  <img src="./assets/images/avatar-7.jpg" width="64" height="64" loading="lazy"
                    alt="Joshua Morris profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper">
                  <h3 class="title-sm">
                    <a href="#" class="link:hover">Joshua Morris</a>
                  </h3>

                  <p class="user-name label-md">@CrazyAnyone</p>
                </div>

                <button class="btn-icon outline" aria-label="Hire Joshua Morris">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="seller-card card">

                <figure class="card-banner">
                  <img src="./assets/images/avatar-8.jpg" width="64" height="64" loading="lazy"
                    alt="Rosaria Vargas profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper">
                  <h3 class="title-sm">
                    <a href="#" class="link:hover">Rosaria Vargas</a>
                  </h3>

                  <p class="user-name label-md">@Princess</p>
                </div>

                <button class="btn-icon outline" aria-label="Hire Rosaria Vargas">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="seller-card card">

                <figure class="card-banner">
                  <img src="./assets/images/avatar-2.jpg" width="64" height="64" loading="lazy"
                    alt="Carl Williams profile">

                  <ion-icon name="checkmark-circle"></ion-icon>
                </figure>

                <div class="card-title-wrapper">
                  <h3 class="title-sm">
                    <a href="#" class="link:hover">Carl Williams</a>
                  </h3>

                  <p class="user-name label-md">@LooserBad</p>
                </div>

                <button class="btn-icon outline" aria-label="Hire Carl Williams">
                  <ion-icon name="person-add-outline" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

          </ul>

        </div>
      </section> -->





      <!--- #QNA   -->

      <section class="section qna" aria-label="question and answer" id="qna" >
        <div class="container">

          <h2 class="headline-md section-title text-center">Q&A</h2>

          <p class="section-text body-md text-center">
            Ayo mulai petualangan Anda di Nusantara dengan bantuan informasi dari website Jelajah Nusantara.
          </p>

          <ul class="qna-list">

            <li class="qna-item">
              <div class="qna-card" data-accordion>

                <button class="qna-btn" data-accordion-btn>
                  <h3 class="title-sm">Apa itu JENTARA?</h3>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </button>

                <div class="qna-content">
                  <p class="body-md">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                  </p>
                </div>

              </div>
            </li>

            <li class="qna-item">
              <div class="qna-card" data-accordion>

                <button class="qna-btn" data-accordion-btn>
                  <h3 class="title-sm">Bagaimana cara akses konten JENTARA ?</h3>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </button>

                <div class="qna-content">
                  <p class="body-md">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                  </p>
                </div>

              </div>
            </li>

            <li class="qna-item">
              <div class="qna-card" data-accordion>

                <button class="qna-btn" data-accordion-btn>
                  <h3 class="title-sm">Apa itu JENTARIAN ?</h3>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </button>

                <div class="qna-content">
                  <p class="body-md">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                  </p>
                </div>

              </div>
            </li>

            <li class="qna-item">
              <div class="qna-card" data-accordion>

                <button class="qna-btn" data-accordion-btn>
                  <h3 class="title-sm">Bisakah menghubungi Adjent ?</h3>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </button>

                <div class="qna-content">
                  <p class="body-md">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    





      <!-- 
        - #CONTACT
      -->

      <section class="section contact" aria-label="contact" id="contact">
        <div class="container">

          <h2 class="headline-md section-title text-center">Have Question ? Get in touch!</h2>
          

          <p class="body-md section-text text-center">
            We are a huge marketplace dedicated to connecting great artists of all Metalink with their fans and unique
            token collectors!
          </p>
          <center>
          <a href="https://wa.me/6285784095638" class="btn btn-primary">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
            
            <span class="span"> Contact us </span>
          </a>
        </center>
        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <div>
              <h3 class="headline-md text-center">Subscribe to Newsletter!</h3>

              <p class="body-md card-text text-center">
                Subscribe to get latest updates and information.
              </p>
            </div>

            <div class="input-wrapper">
              <input type="email" name="email_address" placeholder="Enter your email :" required class="input-field">

              <button class="btn btn-primary">Subscribe</button>
            </div>

            <ion-icon name="mail-open-outline" aria-hidden="true" class="bg-icon bg-icon-1"></ion-icon>

            <ion-icon name="document-text-outline" aria-hidden="true" class="bg-icon bg-icon-2"></ion-icon>

          </div>

        </div>
      </section>

    </article>
  </main>






  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="section footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#">
           <!-- LOGO -->
          </a>

          <p class="body-md footer-text">
          </p>

        </div>

        
        

        <div class="footer-list">

         

          <!-- <ul>

            <li>
              <p class="title-lg footer-list-title">Contact Details</p>
            </li>

            <li class="footer-list-item">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <a href="mailto:metalink@nft.com" class="footer-link">metalink@nft.com</a>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+111 234-567-891" class="footer-link">+111 234-567-891</a>
            </li>

          </ul> -->

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="body-md text-center copyright">
          &copy; 2023 Jentara. Developed with <span class="span">❤</span> by JentTeam.
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-to-top btn-icon" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>





  <div class="body-bg-shape"></div>





  <!-- 
    - custom js link
  -->
  {{-- <script src="{{ asset("js/perkenalan.js") }}"></script> --}}

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
  $(document).ready(function() {
    $(".btn .play-outline").on('click', function() {
      $(this).hide();
      $(".pause-outline").fadeIn();
      $("audio")[0].play();
    });
  });
</script>


</body>

</html>