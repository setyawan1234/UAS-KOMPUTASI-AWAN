@extends('admin.layout.main')
@section('title'){{'Product'}} @endsection
@section('content')
@include('sweetalert::alert')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Product</h6>
            <a href="/adminproduk/create" class="btn btn-primary">Create Product</a>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Klasifikasi</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $item)
                    <tr>
                        <td>{{$item -> id}} </td>
                        <td>{{$item -> nama}}</td>
                        <td>{{$item -> category -> nama}}</td>
                        <td>
                            <img src="@if (!$item -> image)
                                            {{ asset('/assets/img/produk/'.$item -> nama.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" width="100px">
                        </td>
                        <td>@if($item->status==1)
                            <span class="badge bg-warning text-dark">Roasted</span>
                            @elseif($item->status==2)
                            <span class="badge bg-success">Coffee Bean</span>
                            @else
                            <span class="badge bg-primary">Powder</span>
                            @endif
                        </td>
                        <td>{{ Str::limit($item -> deskripsi, 50) }}</td>
                        <td>
                            <a class="btn btn-info" href="/adminproduk/{{$item -> id}}"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-primary" href="/adminproduk/{{$item -> id}}/edit"><i class="bi bi-pencil-square"></i></a>
                            <form action="/adminproduk/{{$item -> id}}" method="POST" class="d-inline">@csrf
                                @method('DELETE')
                                <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini? ')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <div class="d-flex justify-content-start">
            {{$product -> links()}}
        </div>
    </div>
</div>


@endsection