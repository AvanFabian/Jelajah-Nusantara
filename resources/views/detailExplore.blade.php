@extends('layouts.main', ['isExplore2' => true])

@section('title', 'Explore')

@section('content')
   <div class="text-center mt-5 mb-5">
      <h2>WONDERFUL ...</h2>
   </div>
   
   <section class="team section-padding" id="pulau">
      <! -- Start section tarian -->
         <div class="container">
            <div class="section-header text-center pb-5">
               <h2>Tarian</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quo.</p>
            </div>

            <div class="row">
               @foreach ($tarian as $tari)
                  <div class="col-lg-4 mt-3">
                     <div class="card text-center rounded-4" style="height: 39rem;">
                        <iframe src="{{ $tari->ytLink }}" id="ytLegenda" frameborder="6" class="card-img-top"
                           height="300px"></iframe>
                        <div class="card-body">
                           <h3 class="card-title py-2" id="title-tarian">{{ $tari->title }}</h3>
                           <p class="card-text" id="deskripsi-tarian">{{ $tari->description }}</p>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div><!-- end row -->
         </div><!-- end container -->
   </section>
   <!-- End section tarian -->

   <!-- Start section budaya unik -->
   <section class="team section-padding" id="budayaUnik">
      <div class="container">
         <div class="section-header text-center pb-5">
            <h2>Budaya Unik</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quo.</p>
         </div>

         <div class="row">
            <div class="col-lg-4">
               <div class="card text-center rounded-4">
                  <iframe src="https://www.youtube.com/embed/_SSGvxiSFzM" id="ytLegenda" frameborder="6"
                     class="card-img-top" height="300px"></iframe>
                  <div class="card-body">
                     <h3 class="card-title py-2" id="title-budaya">Tarian</h3>
                     <p class="card-text" id="title-deskripsi">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Sequi ipsam
                        nostrum illo tempora esse quibusdam.</p>
                  </div>
               </div>
            </div>
         </div><!-- end row -->
      </div><!-- end container -->
   </section>
   <!-- End section budaya unik -->

   {{-- Start Section Lagu --}}
   <section class="team section-padding" id="lagu">
      <div class="container">
         <div class="section-header text-center pb-5">
            <h2>Lagu-lagu</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quo.</p>
         </div>

         <div class="row">
            <div class="col-lg-4">
               <div class="card text-center rounded-4">
                  <iframe src="https://www.youtube.com/embed/_SSGvxiSFzM" id="ytLegenda" frameborder="6"
                     class="card-img-top" height="300px"></iframe>
                  <div class="card-body">
                     <h3 class="card-title py-2" id="title-lagu">Tarian</h3>
                     <p class="card-text" id="deskripsi-lagu">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Sequi ipsam
                        nostrum illo tempora esse quibusdam.</p>
                  </div>
               </div>
            </div>
         </div><!-- end row -->
      </div><!-- end container -->
   </section><!-- end section.team -->

   {{-- Start Section Legenda --}}
   <section class="team section-padding" id="legenda">
      <div class="container">
         <div class="section-header text-center pb-5">
            <h2>Legenda</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quo.</p>
         </div>

         <div class="row">
            <div class="col-lg-4">
               <div class="card text-center rounded-4">
                  <iframe src="https://www.youtube.com/embed/_SSGvxiSFzM" id="ytLegenda" frameborder="6"
                     class="card-img-top" height="300px"></iframe>
                  <div class="card-body">
                     <h3 class="card-title py-2" id="title-legenda">Tarian</h3>
                     <p class="card-text" id="deskripsi-legenda">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Sequi ipsam
                        nostrum illo tempora esse quibusdam.</p>
                  </div>
               </div>
            </div>
         </div><!-- end row -->
      </div><!-- end container -->
   </section><!-- end section.team -->
   {{-- End Section Legenda --}}
@endsection
