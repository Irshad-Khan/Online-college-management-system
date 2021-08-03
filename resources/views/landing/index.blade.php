@extends('layouts.landing')

@section('content')
<!--START HOME-->
<section class="section home" id="home">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-white text-center">
                <h1 class="home-title">The Government Sadiq College Women University, Bahawalpur Pakistan</h1>
                {{-- <a href="#" class="btn btn-custom mt-4">Apply Now</a> --}}

                <section class="section text-center" style="background: transparent">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        {{-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-md-8 offset-md-2">
                                                        <div class="testimonial-box">
                                                            <div class="mb-4">
                                                                <i class="mdi mdi-format-quote-open quote-icon"></i>
                                                            </div>
                                                            <h6 class="testimonial-team-desc mb-4 text-white">
                                                                As an emerging university in southern Punjab, The Govt. 
                                                                Sadiq College Women University aims to provide quality education
                                                                to empower women through knowledge and skills so as to participate
                                                                actively in the socio-economic development of Pakistan; as well as to
                                                                impact the attitudes and behaviors of its graduates through various programs
                                                                and initiatives to emerge as responsible, peaceful and tolerant citizens of the world.
                                                            </h6>
                
                                                            <p class="testmonial-team-name">Vision</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="carousel-item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-md-8 offset-md-2">
                                                        <div class="testimonial-box">
                                                            <div class="mb-4">
                                                                <i class="mdi mdi-format-quote-open quote-icon"></i>
                                                            </div>
                                                            <h6 class="testimonial-team-desc mb-4 text-white">
                                                                To prepare dynamic women leaders and practitioners in teaching,
                                                                research and management having content excellence, pedagogical competence,
                                                                 commitment and integrity who may ensure quality and sustainable
                                                                development of Pakistan in general and south Punjab in particular.
                                                            </h6>
                
                                                            <p class="testmonial-team-name">Mission</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                    </div>
                </section>            </div>
        </div>
    </div>
</section>
<!--END HOME-->

<section class="section" id="features">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h3>Offered Programs</h3>
                    <p class="text-muted slogan">The Government Sadiq College Women University, Bahawalpur Pakistan. Provide Programs in every fields.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            @foreach ($programs as $program)
                <div class="col-md-4 services-box">
                    <div class="text-center p-3">
                        <i class="mbri-help text-custom"></i>
                        <h5 class="pt-4">{{ $program->title }}</h5>
                        <p class="text-gray pt-2"><strong>Duration:</strong> {{ $program->duration }}</p>
                        <p class="text-gray pt-2"><strong>Program type:</strong> {{ $program->program_type }}</p>
                        <p class="text-gray pt-2"><strong>Fee Per Semester:</strong> {{ $program->fee_per_semester }} PKR</p>
                        {{-- <p class="text-gray pt-2">{{ Str::substr($program->description, 0, 200) }}</p> --}}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>


<section class="section" id="pricing">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h3>Open Applications</h3>
                    <p class="text-muted slogan">The Government Sadiq College Women University, Bahawalpur Pakistan offered new admissions in different projects.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            @foreach ($admissions as $admission)
            <div class="col-sm-4 mt-4">
                <div class="card plan-card text-center">
                    <div class="card-body">
                        <div class="pt-3 pb-3">
                            <h1><i class="ion-trophy plan-icon bg-dark"></i></h1>
                            <h6 class="text-uppercase text-dark">{{ $admission->program->title }}</h6>
                        </div>
                        <div>
                            <h4 class="plan-price">Start Date: {{ Carbon\Carbon::parse($admission->announcement_date)->format('d M Y') }}</h4>
                            <div class="plan-div-border"></div>
                        </div>
                        <div>
                            <h4 class="plan-price">End Date: {{ Carbon\Carbon::parse($admission->last_date)->format('d M Y') }}</h4>
                            <div class="plan-div-border"></div>
                        </div>
                        <div class="plan-features pb-3 mt-3 text-muted padding-t-b-30">
                            <p></p>
                            <p></p>
                           
                            <a href="#" class="btn btn-custom">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end row -->

    </div>
</section>

<section class="section" id="team">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h3>Our Team</h3>
                    <p class="text-muted slogan">The Government Sadiq College Women University, Bahawalpur Pakistan</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4 col-sm-6">
                <div class="team-box text-center">
                    <div class="team-wrapper">
                        <div class="team-member">
                            <img alt="" src="{{ asset('images/girl.png') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div>
                    <h4 class="team-name text-uppercase">Roll# 02</h4>
                    <p class="text-uppercase team-designation">Bushra Bibi (Developer)</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-box text-center">
                    <div class="team-wrapper">
                        <div class="team-member">
                            <img alt="" src="{{ asset('images/girl.png') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div>
                    <h4 class="team-name text-uppercase">Roll# 03</h4>
                    <p class="text-uppercase team-designation">Hira Younis (Developer)</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-box text-center">
                    <div class="team-wrapper">
                        <div class="team-member">
                            <img alt="" src="{{ asset('images/girl.png') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div>
                    <h4 class="team-name text-uppercase">Roll# 5</h4>
                    <p class="text-uppercase team-designation">Naila Noreen</p>
                </div>
            </div>

        </div>

    </div>
</section>



<!--Form Section-->
<section class="section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h3>Get In Touch</h3>
                    <p class="text-muted slogan">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vivamus eu sollicitudin lacus, nec ultricies lorem.</p>
                </div>
            </div>
        </div>

        <br/>

        <form class="">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" class="form-control" id="username" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="useremail">Email address</label>
                        <input type="email" class="form-control" id="useremail" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" rows="5" id="message"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-custom">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!--END FORM-->
@stop