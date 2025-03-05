
<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<?php
    $websiteDetails = App\Models\WebsiteDetail::Where('id', '1')->first();
?>
<!-- Navbar start -->
<div class="container-fluid sticky-top  wow bg-dark fadeIn" data-wow-delay="0.1s">
    <div class="container px-0">
        <nav class="navbar navbar-light navbar-expand-xl py-3">
            <div class="profile-img">
                <a href="{{ url('/') }}">
                <img src="{{ asset(IMAGE_UPLOAD_PATH.'/'.$websiteDetails['image']) }}" alt="Logo" class="img-fluid rounded-circle" style="height: 80px;">
            </a>
            </div>            
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ url('/about-us') }}" class="nav-item nav-link {{ Request::is('about-us') ? 'active' : '' }}">About</a>
                    <!-- <a href="{{ url('/programs') }}" class="nav-item nav-link {{ Request::is('programs') ? 'active' : '' }}">Programs</a> -->
                    <div class="nav-item dropdown">
                        <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0 bg-primary rounded-0">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScD-Ek6CdFs2ydXDNiCUMSo8iX8_MkeKuOMq1g5Cz3sCf7K3w/viewform" target="_blank" class="dropdown-item">Become a mentor</a>
                        </div>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="nav-item nav-link {{ Request::is('contact-us') ? 'active' : '' }}">Contact</a>
                    <a class="nav-item nav-link btn btn-primary" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdNWtGpDTJjVmTAhQeLmSLHiNs6sZ_-w275MywHDEMCl8zs_A/viewform">Book a Free Demo</a>
                </div>
                </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
