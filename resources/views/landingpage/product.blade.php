@extends('layouts.main')
@section('title'){{'Agrofarm Globalindo - Product'}} @endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Product Roasted</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product End -->
<!-- Green bean -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Product</div>
            <h1 class="display-6 mb-3">Know More About Our Product</h1>
            <h3 class="display-6 mb-0">Coffee Bean</h3>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            @forelse($produkG as $item)
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="@if (!$item -> image)
                                            {{ asset('/assets/img/produk/'.$item -> nama.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" style="width: 200px; height: 200px; ">
                <div class="testimonial-text rounded text-center p-4">
                    <h3 class="mb-4" style="font-family: Montserrat,sans-serif;">{{$item -> nama}}</h3>
                    <p>{{$item -> deskripsi}}.</p>
                    <a href="/productdetail/{{$item -> id}}" class="btn btn-dark">
                        <b>Learn more</b>
                    </a>
                    <a href="https://wa.me/6285733519756?text=Hello,I%20want%20to%20get%20information%20about%20the%20products.">
                        <button type="button" class="btn btn-dark"><b>Contact Us</b>
                            <span class="bi bi-whatsapp green-color"> </span></button>
                    </a>
                </div>
            </div>
            @empty
            @endforelse

        </div>
    </div>
</div>
<!-- Roasted -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Product</div>
            <h1 class="display-6 mb-3">Know More About Our Product </h1>
            <h3 class="display-6 mb-0">Roasted Coffee</h3>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            @forelse($produkR as $item)
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="@if (!$item -> image)
                                            {{ asset('/assets/img/produk/'.$item -> nama.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" style="width: 200px; height: 200px; ">
                <div class="testimonial-text rounded text-center p-4">
                    <h3 class="mb-4" style="font-family: Montserrat,sans-serif;">{{$item -> nama}}</h3>
                    <p>{{$item -> deskripsi}}</p>
                    <a href="/productdetail/{{$item -> id}}" class="btn btn-dark">
                        <b>Learn more</b>
                    </a>
                    <a href="https://wa.me/6285733519756?text=Hello,I%20want%20to%20get%20information%20about%20the%20products.">
                        <button type="button" class="btn btn-dark"><b>Contact Us</b>
                            <span class="bi bi-whatsapp green-color"> </span></button>
                    </a>

                </div>
            </div>
            @empty
            @endforelse

        </div>
    </div>
</div>
<!-- Powder -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Product</div>
            <h1 class="display-6 mb-3">Know More About Our Product</h1>
            <h3 class="display-6 mb-0">Coffee Powder</h3>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            @forelse($produkP as $item)
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="@if (!$item -> image)
                                            {{ asset('/assets/img/produk/'.$item -> nama.'.png') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" style="width: 200px; height: 200px; ">
                <div class="testimonial-text rounded text-center p-4">
                    <h3 class="mb-4" style="font-family: Montserrat,sans-serif;">{{$item -> nama}}</h3>
                    <p>{{$item -> deskripsi}}.</p>
                    <a href="/productdetail/{{$item -> id}}" class="btn btn-dark">
                        <b>Learn more</b>
                    </a>
                    <a href="https://wa.me/6285733519756?text=Hello,I%20want%20to%20get%20information%20about%20the%20products.">
                        <button type="button" class="btn btn-dark"><b>Contact Us</b>
                            <span class="bi bi-whatsapp green-color"> </span></button>
                    </a>
                </div>
            </div>
            @empty
            @endforelse

        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection