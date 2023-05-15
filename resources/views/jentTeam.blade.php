@extends('Layouts.main', ['isTeam' => true])

@section('title', 'JentTeam')

@section('content')
    <section class="team section-padding" id="team">
        <div class="container">
            <div class="section-header text-center pb-5">
                <h2>Our Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quo.</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ asset('images/project-1-img/team-1.jpg') }}" alt="Placeholder image" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Adelia Khansa R</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam
                                nostrum illo tempora esse quibusdam.</p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i> 
                                <i class="bi bi-facebook text-dark mx-1"></i> 
                                <i class="bi bi-linkedin text-dark mx-1"></i> 
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ asset('images/project-1-img/team-2.jpg') }}" alt="Placeholder image" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Alfaj Syahrizal</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam
                                nostrum illo tempora esse quibusdam.</p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i> 
                                <i class="bi bi-facebook text-dark mx-1"></i> 
                                <i class="bi bi-linkedin text-dark mx-1"></i> 
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ asset('images/project-1-img/team-3.jpg') }}" alt="Placeholder image" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Avan Fabian</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam
                                nostrum illo tempora esse quibusdam.</p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i> 
                                <i class="bi bi-facebook text-dark mx-1"></i> 
                                <i class="bi bi-linkedin text-dark mx-1"></i> 
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ asset('images/project-1-img/team-4.jpg') }}" alt="Placeholder image" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Dita Anggraini</h3>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam
                                nostrum illo tempora esse quibusdam.</p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i> 
                                <i class="bi bi-facebook text-dark mx-1"></i> 
                                <i class="bi bi-linkedin text-dark mx-1"></i> 
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section.team -->
@endsection
