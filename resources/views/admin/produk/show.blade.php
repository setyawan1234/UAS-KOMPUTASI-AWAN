@extends('admin.layout.main')
@section('title'){{'Show Product'}} @endsection
@section('content')
<!-- <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Detail Product
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No : </b>{{$product->id}}</li>
                    <li class="list-group-item"><b>Nama : </b>{{$product->nama}}</li>
                    <li class="list-group-item"><b>Gambar : </b><img src="@if (!$product -> image)
                                            {{ asset('/assets/img/produk/'.$product -> nama.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$product -> image)}}
                                          @endif" alt="" height="150px" width="150px" class="rounded" style="object-fit: cover"></li>
                    <li class="list-group-item"><b>Deskripsi : </b>{{$product->deskripsi}}</li>
                </ul>
                <a class="btn btn-success mt-3" href="/adminproduk">Kembali</a>
            </div>

        </div>
    </div>
</div> -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-start rounded p-4">
        <div class="card">
            <div class="card-header">
                Detail Product
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No : </b>{{$product->id}}</li>
                    <li class="list-group-item"><b>Nama : </b>{{$product->nama}}</li>
                    <li class="list-group-item"><b>Kategori : </b>{{$product->category -> nama}}</li>
                    <li class="list-group-item"><b>Gambar : </b><img src="@if (!$product -> image)
                                            {{ asset('/assets/img/produk/'.$product -> nama.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$product -> image)}}
                                          @endif" alt="" height="150px" width="150px" class="rounded" style="object-fit: cover"></li>
                    <li class="list-group-item"><b>Klasifikasi : </b>@if($product->status==1)
                        <span class="badge bg-warning text-dark">Roasted</span>
                        @elseif ($product->status==2)
                        <span class="badge bg-success text-dark">Coffee Bean</span>
                        @else
                        <span class="badge bg-info">Powder Coffee</span>
                        @endif
                    </li>
                    <li class="list-group-item"><b>Deskripsi : </b>{{$product->deskripsi}}</li>
                </ul>
                <a class="btn btn-success mt-3" href="/adminproduk">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection