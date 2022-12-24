@extends('layouts.main')
@section('title'){{'Agrofarm Globalindo - About'}} @endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        @forelse($about as $item)
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="@if (!$item -> image)
                                            {{ asset('/assets/img/about/'.$item -> judul.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="@if (!$item -> image2)
                                            {{ asset('/assets/img/about/'.$item -> id.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$item -> image2)}}
                                          @endif" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                    <h1 class="display-6 mb-5">{{$item -> judul}}</h1>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">{{$item -> head}}</p>
                    </div>
                    <p>{{$item -> intro1}}</p>
                    <p>{{$item -> intro2}}</p>
                    <p>{{$item -> intro3}}</p>
                    <a class="btn btn-primary py-2 px-3 me-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <a class="btn btn-outline-primary py-2 px-3" href="https://wa.me/6285733519756?text=Hello,I%20want%20to%20get%20information%20about%20the%20products.">
                        Contact Us
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
            <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="/assets/img/integrity.png" alt="">
                    <h4 class="mb-3">Integritas</h4>
                    <p class="mb-4">Pondasi utama kami berpegang teguh dengan mengatakan kebenaran, menepati janji dan memperlakukan orang dengan adil dan hormat untuk menjaga kepercayaan.</p> -->
<!-- <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> -->
<!-- </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="/assets/img/quality.png" alt="">
                    <h4 class="mb-3">Kualitas</h4>
                    <p class="mb-4">Kualitas ditunjukkan dengan memberikan layanan terbaik, memilih biji kualitas terbaik untuk kepuasan pelanggan serta support kebutuhan pelanggan dengan memberikan kuantitas dan kualitas yang dibutuhkan.</p> -->
<!-- <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> -->
<!-- </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="/assets/img/commitment.png" alt="">
                    <h4 class="mb-3">Komitmen</h4>
                    <p class="mb-4">Berkomitmen untuk melayani sebagai hak istimewa yang diberikan kepada pelanggan dengan profesional, bertanggung jawab, tuntas dan akurat.</p>
                    <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> -->
<!-- </div> -->
<!-- </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="/assets/img/inovation.png" alt="">
                    <h4 class="mb-3">Inovasi</h4>
                    <p class="mb-4">Menciptakan, merancangkan dan mengembangkan produk dan layanan yang memiliki kualitas dan daya tarik yang tinggi untuk menjadi preferensi pelanggan sebagai bentuk antusiasme kami dalam inovasi.</p> -->
<!-- <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> -->
<!-- </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Feature End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection