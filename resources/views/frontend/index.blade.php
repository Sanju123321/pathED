@extends('common.frontend.layout')
@section('title', 'Home')
@section('content')
    @include('common.frontend.header')
    <!-- Hero Start -->
    <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12">
                    <!-- <h1 class="mb-3 text-primary">Creative Spark</h1> -->
                    </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5 about bg-light  wow fadeIn" data-wow-delay="0.1s">
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

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">What We Do</h4>
                <h1 class="mb-5 display-3">Thanks To Get Started With Our School</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="img-border-radius text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4">                                        
                                    <img alt="stem-img" height="60px" src="{{ asset('frontend/img/STEM.jpg') }}"/>
                                </div>
                                <a  class="h4">STEM</a>
                                <p class="my-3">STEM stands for Science, Technology, Engineering, and Mathematics. The academic disciplines and fields that focus on these areas of knowledge. The concept of STEM is often used to promote education with integrated form of Technology with Core Studies.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="img-border-radius text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4">
                                    <img alt="ngss-img" height="60px" src="{{ asset('frontend/img/NGSS .jpeg') }}"/>   
                                </div>
                                <a  class="h4">NGSS</a>
                                <p class="my-3">NGSS stands for Next Generation Science Standards. The set of K-12 science content standards in the US that aim to provide students with a comprehensive science education based on current scientific knowledge and teaching practices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="img-border-radius text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4">
                                    <img alt="gcse-img" height="60px" src="{{ asset('frontend/img/gcse.jpeg') }}"/>
                                </div>
                                <a  class="h4">GCSE</a>
                                <p class="my-3">GCSE - GCSE stands for General Certificate of Secondary Education. It is an important part of the UK education system, as they serve as a key measure of academic achievement and are often required for further study for students within the age groups of 16.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="img-border-radius text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4">
                                    <img alt="gcse-img" height="60px" src="{{ asset('frontend/img/ib.jpg') }}"/>
                                </div>
                                <a  class="h4">IB (HL & SL)</a>
                                <p class="my-3">IB stands for the International Baccalaureate, an educational program that offers rigorous academic courses for students aged 3 to 19 known for high standards, international perspective, and emphasis on developing well-rounded, critical thinkers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden ">
                                <img src="{{ asset('frontend/img/program-1.jpg') }}" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="pt-2 program-text-inner">
                                <h4  class="text-primary">Mathematics k-12</h4>

                                <ul class="course-list pt-2">
                                    <li>1-1 Personalized Online Sessions</li>
                                    <li>STEM Followed Curriculum</li>
                                    <li>K-6 Learning With Games and Fun</li>
                                    <li>07-12 Learning With Competitive Approach</li>
                                    <li>Worksheets Practice in Class and HomeWorks</li>
                                </ul>
                                <div class="course-price text-primary">Classes Starting From: $15** Per Class</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden">
                                <img src="{{ asset('frontend/img/program-2.jpg') }}" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="pt-2 program-text-inner">
                                <h4  class="text-primary">Science K-12</h4>
                                <ul class="course-list pt-2">
                                    <li>1-1 Personalized Online Sessions</li>
                                    <li>NGSS Followed Curriculum</li>
                                    <li>K-8 Learning With Fun Games and Simulated Experiments (DIY Activities)</li>
                                    <li>Higher Science Categorized and Competitive Learning Approach</li>
                                    <li>Worksheets Practice in Class and HomeWorks</li>
                                </ul>
                            </div>
                            <div class="course-price text-primary">Classes Starting From: $15** Per Class</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden ">
                                <img src="{{ asset('frontend/img/program-3.jpg') }}" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="pt-2 program-text-inner">
                                <h4  class="text-primary">College Year / Competitive</h4>
                                <ul class="course-list pt-2">
                                    <li>SAT Mathematics - Comprehensive Coverage</li>
                                    <li>MAP - Tailored Sessions</li>
                                    <li>AP (AB/BC) - Calculus Mastery</li>
                                    <li>ACT - Focused Learning</li>
                                    <li>Many Other Exams</li>
                                </ul>
                                <div class="course-price text-primary">Classes Starting From: $25** Per Class</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- Program End -->

    <!-- Events Start -->
    <div class="container-fluid events py-5  wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Our Start</h4>
                <h1 class="mb-5 display-3">Path To Start</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden position-relative">
                                <img src="{{ asset('frontend/img/event-1.jpg') }}" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <h4  class="text-primary">Step 1</h4>
                            <p class="mb-0 mt-3">Book your free Demo class at your Preferred Day, Date, Time</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden position-relative">
                                <img src="{{ asset('frontend/img/event-2.jpg') }}" class="img-fluid w-100 " alt="Image">
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <h4  class="text-primary">Step 2</h4>
                            <p class="mb-0 mt-3">Choose your Regular Classes Frequency and Schedule according to Your Comfortability or Availability </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="events-item bg-primary rounded">
                        <div class="events-inner position-relative">
                            <div class="events-img overflow-hidden position-relative">
                                <img src="{{ asset('frontend/img/event-3.jpg') }}" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="events-text p-4 border border-primary bg-white border-top-0 rounded-bottom">
                            <h4  class="text-primary">Step 3</h4>
                            <p class="mb-0 mt-3">Enroll For Classes and Get Started with regular Classes</p>
                        </div>
                    </div>
                </div>
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
