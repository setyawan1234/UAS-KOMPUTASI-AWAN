@extends('layouts.main')
@section('title'){{'Agrofarm Globalindo - Contact'}} @endsection
@section('content')
@include('sweetalert::alert')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Contact Us</div>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <h1 class="display-6 mb-5">Let us know if you need help</h1>
                <p class="mb-4 text-bold">You can contact us if there are any suggestion and offer for our products with just fill the form bellow</a></p>

                <form method="post" action="/adminmessage" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="nama">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subjek">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" name="pesan"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary py-2 px-3 me-3">
                                Send Message
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                <div class="position-relative rounded overflow-hidden h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7726931097454!2d112.52180271472469!3d-7.599699094519974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78734a177e9417%3A0xc264e8f872325ac1!2sAgrofarm%20Globalindo%20Investama!5e0!3m2!1sid!2sid!4v1668406396185!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-md-6">
                <h1 class="fw-bold m-0" style="color: #379237;">AGRO<span class="fw-bold m-0" style="color: #3C2317;">COFFEE</span></h1>
                <h4 class="mb-4 text-bold">Thanks fo visiting us! If you have any questions about Agro Coffe, contact us via the contact on this page.</a></p>
            </div>
            <div class="col-lg-3 col-md-6" style="color: #000000;">
                <p><i class="fa fa-map-marker-alt me-3"></i>Dusun Simbarinigin, Kel/Desa Pandansari, RT 02/RW 10, Simbaran, Simbaringin, Kec. Kutorejo, Kab. Mojokerto, Jawa Timur 61383
                </p>
                <p><i class="fa fa-phone-alt me-3"></i>+62-857-4175-3941</p>
                <p><i class="fa fa-phone-alt me-3"></i>+62-857-3351-9756</p>
                <p><i class="fa fa-envelope me-3"></i>care.agrofarm@gmail.com</p>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->
@endsection