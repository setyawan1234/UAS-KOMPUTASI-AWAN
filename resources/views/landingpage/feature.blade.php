@extends('layouts.main')
@section('title'){{'Agrofarm Globalindo - Feature'}} @endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Feature</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Feature</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Feature Start -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
            <h1 class="display-6 mb-5">Learn More About Our Commitment</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @forelse($feature as $item)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="@if (!$item -> image)
                                            {{ asset('/assets/img/feature/'.$item -> nama.'.png') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" alt="">
                    <h4 class="mb-3">{{$item -> nama}}</h4>
                    <p class="mb-4">{{$item -> deskripsi}}</p>
                    <!-- <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> -->
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div><!-- Feature End -->

<!-- Causes Start -->
<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Know More About Our Method Process</div>
            <h1 class="display-6 mb-5">Our Method Process</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @forelse($process as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>{{$item -> nama}}</small>
                        </div>
                        <h5 class="mb-3">{{$item -> judul}}</h5>
                        <p>{{$item -> deskripsi}}</p>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid bg-light rounded" src="@if (!$item -> image)
                                            {{ asset('/assets/img/home/'.$item -> nama.'.jpeg') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse

        </div>
    </div>
</div>
<!-- Causes End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection