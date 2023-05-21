<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-md-3 order-2 order-sm-1">
                <a href="./index.html" class="site-logo">
                    <img src="{{ asset('images/mainContent/jawa/img/logo.png') }}" alt>
                </a>
                <div class="header__social">
                    <!-- <a href="#"><i class="fa fa-home" aria-hidden="false""></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a> -->
                    <!-- <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a> -->

                </div>
            </div>
            <div class="col-sm-4 col-md-6 order-1  order-md-2 text-center">
                <!-- <a href="./index.html" class="site-logo">
                <img src="img/logo.png" alt>
                </a> -->
            </div>
            <div class="col-sm-4 col-md-3 order-3 order-sm-3">
                <div class="header__switches">
                    <a href="#" class="search-switch"><i class="fa fa-home"></i></a>
                    <a href="#" class="nav-switch"><i class="fa fa-bars"></i></a>

                </div>
            </div>
        </div>
        <nav class="main__menu">
            <ul class="nav__menu">
                <li><a href="{{ route('island.content.show', ['island' => $currentIsland, 'content' => 'tentang']) }}" data-island="{{ $currentIsland }}">Tentang</a></li>
                <li><a href="{{ route('island.content.show', ['island' => $currentIsland, 'content' => 'taritradisional']) }}" data-island="{{ $currentIsland }}">Tari Tradisional</a></li>
                <li><a href="{{ route('island.content.show', ['island' => $currentIsland, 'content' => 'legenda']) }}" data-island="{{ $currentIsland }}">Legenda</a></li>
                <li><a href="{{ route('island.content.show', ['island' => $currentIsland, 'content' => 'budayaunik']) }}" data-island="{{ $currentIsland }}">Budaya Unik</a></li>
                <li><a href="{{ route('island.content.show', ['island' => $currentIsland, 'content' => 'wisata']) }}" data-island="{{ $currentIsland }}">Wisata</a></li>
            </ul> 
        </nav>
    </div>
</header>
{{-- <li><a href="{{ route('getTentang') }}">Tentang</a></li>
<li><a href="{{ route('getTari') }}">Tari Tradisional</a></li>
<li><a href="{{ route('getLegenda') }}" class="menu--active">Legenda</a></li>
<li><a href="{{ route('getBudaya') }}">Budaya Unik</a>
<li><a href="{{ route('getWisata') }}">Wisata</a></li> --}}
{{-- <section id="tentang">

</section>
<section id="taritradisional">

</section>
<section id="legenda">

</section>
<section id="budayaunik">

</section>
<section id="wisata">

</section> --}}