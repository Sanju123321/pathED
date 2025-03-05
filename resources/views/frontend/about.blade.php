@extends('common.frontend.layout')
@section('title', 'About-us')
@section('content')
    @include('common.frontend.header')
    <!-- About Start -->
    <div class="container-fluid py-5 about   wow fadeIn" data-wow-delay="0.1s">
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
    @include('common.frontend.footer')
@endsection
