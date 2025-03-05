@extends('common.frontend.layout')
@section('title', 'Contact-us')
@section('content')
    @include('common.frontend.header')
        <!-- Contact Start -->
        <?php
            $websiteDetails = App\Models\WebsiteDetail::Where('id', '1')->first();
        ?>
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Contact Us</h4>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                            <form action="">
                                <input type="text" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Your Name">
                                <input type="email" class="w-100 form-control py-3 mb-5 border-primary" placeholder="Enter Your Email">
                                <textarea class="w-100 form-control mb-5 border-primary" rows="8" cols="10" placeholder="Your Message"></textarea>
                                <button class="w-100 btn btn-primary form-control py-3 border-primary text-white bg-primary" type="button" disabled>Submit</button>
                            </form>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border border-primary h-100 rounded">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54769.07482865763!2d75.77224373817444!3d30.912746383386306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a83a1fbd6e9c7%3A0x7a1891414f61577c!2sLudhiana%20Junction!5e0!3m2!1sen!2sin!4v1739564772346!5m2!1sen!2sin" 
                                class="w-100 h-100 rounded" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    @include('common.frontend.footer')
@endsection
