@extends('admin.layout.main')
@section('title'){{'Kategori'}} @endsection
@section('content')
@include('sweetalert::alert')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Kategori</h6>
            <a href="/adminkategori/create" class="btn btn-primary">Create Kategori</a>
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
                        <!-- <th scope="col">Jenis Grade</th> -->
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $item)
                    <tr>
                        <td>{{$item -> id}} </td>
                        <td>{{$item -> nama}}</td>
                        <!-- <td>{{$item -> grade}}</td> -->
                        <td>
                            <a class="btn btn-primary" href="/adminkategori/{{$item -> id}}/edit"><i class="bi bi-pencil-square"></i></a>

                            <form action="/adminkategori/{{$item -> id}}" method="POST" class="d-inline">@csrf
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
            {{$kategori -> links()}}
        </div>
    </div>
</div>
@endsection