@extends('layouts.main')
@section('title'){{'Agrofarm Globalindo - About'}} @endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Product</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Product</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Product Details</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">


        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute rounded-1 w-100 h-100  " src="@if (!$product -> image)
                                        {{ asset('/assets/img/produk/'.$product -> nama.'.jpg') }}
                                        @else
                                        {{asset('storage/'.$product -> image)}}
                                    @endif" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                    <h1 class="display-6 mb-5">Know More About Our Product </h1>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">{{$product -> nama}}</p>
                    </div>
                    <p>{{$product -> deskripsi}}</p>
                    <a class="btn btn-outline-primary py-2 px-3" href="https://wa.me/6285733519756?text=Hello,I%20want%20to%20get%20information%20about%20the%20items.">
                        Contact Us
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            @foreach($details as $detail)
            <div class="col-lg-3 col-md-6" style="color: #000000;">
                <p><i class="fas fa-leaf me-3"></i>{{$detail-> grade}}</p>
                <p><i class="fas fa-ellipsis-h me-3"></i>Screen -> {{$detail-> screen}}</p>
                <p><i class="fas fa-ellipsis-h me-3"></i>Above Screen 18 -> {{$detail-> above}}</p>
                <p><i class="fas fa-ellipsis-h me-3"></i>Defect Max. -> {{$detail-> defect}}</p>
                <p><i class="fas fa-ellipsis-h me-3"></i>Imperfect Max. -> {{$detail-> imperfect}}</p>
                <p><i class="fas fa-ellipsis-h me-3"></i>Process -> {{$detail-> process}}</p>
                <p><i class="fas fa-ellipsis-h me-3"></i>Variety -> {{$detail-> variety}}</p>
                <p><i class="fas fa-ellipsis-h me-3"></i> Moisture Max. -> {{$detail-> maisture}}</p>
            </div>
            @endforeach
        </div>


    </div>
</div>
<!-- About End -->



@endsection