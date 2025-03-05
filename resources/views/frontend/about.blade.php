@extends('common.frontend.layout')
@section('title', 'About-us')
@section('content')
    @include('common.frontend.header')
    <!-- About Start -->
    <div class="container-fluid py-5 about   wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">About Us</h4>
                    <p class="text-dark mb-4 ">Welcome to <b>PathED</b>, your trusted partner in transforming education through innovative online learning solutions. At PathED, we are committed to making quality education accessible, engaging, and impactful for learners of all ages and backgrounds.</p>
                    <p class="text-dark mb-4">Our mission is to <b>empower individuals</b> by providing a comprehensive platform that offers diverse courses, resources, and tools designed to support personal, academic, and professional growth. Whether you're a student looking to gain new skills, a working professional aiming to upskill, or a lifelong learner with a passion for knowledge, PathED is here to guide you every step of the way.
                    </p>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>⁠1 on 1 Personalized Online Classes.</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>⁠Expert Certified Mentors.</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>In Class Fun Activities and Games.</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>⁠Learn at Your Pace.</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>⁠In Class Practice and HomeWorks.</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Make Yourself Exam Ready.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    @include('common.frontend.footer')
@endsection
