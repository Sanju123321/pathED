@extends('common.frontend.layout')
@section('title', 'Programs')
@section('content')
    @include('common.frontend.header')
    <!-- Programs Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
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
    @include('common.frontend.footer')
    @endsection
