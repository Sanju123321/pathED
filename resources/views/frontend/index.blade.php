@extends('common.frontend.layout')
@section('title', 'Home')
@section('content')
@include('common.frontend.header')
<style>
    .hero-header, .page-header {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.05)), url(../img/ped_cover.png) !important;
    }
</style>
    <!-- Hero Start -->
    <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12"></div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5 about bg-light  wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">About Us</h4>
                    <p class="text-dark mb-4 ">
                        {!! @$get_about_us['description'] !!}
                    </p>
                    @php
                        $half = ceil(count($get_about_us_type) / 2);
                        $leftColumn = array_slice($get_about_us_type, 0, $half);
                        $rightColumn = array_slice($get_about_us_type, $half);
                    @endphp
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            @foreach ($leftColumn as $feature)
                                <h6 class="mb-3">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>{{ $feature['heading'] }}
                                </h6>
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            @foreach ($rightColumn as $feature)
                                <h6 class="mb-3">
                                    <i class="fas fa-check-circle me-2 text-primary"></i>{{ $feature['heading'] }}
                                </h6>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">PED Follows Core Curriculums</h4>
                <!-- <h1 class="mb-5 display-3">Thanks To Get Started With Our School</h1> -->
            </div>
            <div class="row g-5">
                @foreach ($coreCurriculam as $service)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="img-border-radius text-center border-primary border bg-white service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-inner">
                                    <div class="p-4">           
                                    <?php 
                                        $banner_image = asset(IMAGE_UPLOAD_PATH.''. $service['image1']);
                                    ?>                             
                                        <img alt="{{ $service['heading1'] }}-img" height="60px" src="{{ $banner_image }}"/>
                                    </div>
                                    <a class="h4">{{ $service['heading1'] }}</a>
                                    <p class="my-3">{{ $service['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Programs Start -->
    <div class="container-fluid bg-light py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Programs</h4>
                <h1 class="mb-5 display-3">We Offer An Exclusive Program For Kids</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="row">
                    @foreach ($ourProgram as $program)
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="program-item rounded">
                                <div class="program-img position-relative">
                                    <div class="overflow-hidden">
                                        <?php 
                                            $banner_image = asset(IMAGE_UPLOAD_PATH.''. $program['image1']);
                                        ?> 
                                        <img src="{{ $banner_image }}" class="img-fluid w-100" alt="{{ $program['heading1'] }}">
                                    </div>
                                </div>
                                <div class="program-text bg-white px-4 pb-3">
                                    <div class="pt-2 program-text-inner">
                                        <h4 class="text-primary">{{ $program['heading1'] }}</h4>
                                        {!! @$program['description'] !!}
                                        <div class="course-price text-primary">{{ $program['heading2'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> 
        </div>
    </div>
    <!-- Program End -->

    <!-- Events Start -->
    <div class="container-fluid events py-5  wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Path To Start</h4>
                <div style="margin: 11px 257px;">
                    <a style="width: 186px;" class="nav-item nav-link btn btn-primary" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdNWtGpDTJjVmTAhQeLmSLHiNs6sZ_-w275MywHDEMCl8zs_A/viewform">Book a Free Demo</a>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                @foreach ($pathToStart as $event)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="events-item bg-primary rounded">
                            <div class="events-inner position-relative">
                                <div class="events-img overflow-hidden position-relative">
                                    <?php 
                                        $banner_image = asset(IMAGE_UPLOAD_PATH.''. $event['image1']);
                                    ?> 
                                    <img src="{{ $banner_image }}" class="img-fluid w-100" alt="{{ $event['heading1'] }}">
                                </div>
                            </div>
                            <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                                <h4 class="text-primary">{{ $event['heading1'] }}</h4>
                                <p class="mb-0 mt-3">{{ $event['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Events End-->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Testimonials</h4>
                <h1 class="mb-5 display-3">Parents Say About Us</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="{{ asset('frontend/img/testimonial-2.jpg') }}" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Deepak</h4>
                                <p class="m-0 pb-3">Site Engineer</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="{{ asset('frontend/img/testimonial-2.jpg') }}" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Palak</h4>
                                <p class="m-0 pb-3">Doctor</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light border border-primary p-4">
                    <div class="p-4 position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="top: 15px; right: 15px;"></i>
                        <div class="d-flex align-items-center">
                            <div class="border border-primary bg-white rounded-circle">
                                <img src="{{ asset('frontend/img/testimonial-2.jpg') }}" class="rounded-circle p-2" style="width: 80px; height: 80px; border-style: dotted; border-color: var(--bs-primary);" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-dark">Sanjeev</h4>
                                <p class="m-0 pb-3">Accountant</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-primary mt-4 pt-3">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    @include('common.frontend.footer')
    @endsection
