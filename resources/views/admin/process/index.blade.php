@extends('admin.layout.main')
@section('title'){{'Process'}} @endsection
@section('content')
@include('sweetalert::alert')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Process</h6>
            <a href="/adminprocess/create" class="btn btn-primary">Create Process</a>
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
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Dokumentasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($process as $item)
                    <tr>
                        <td>{{$item -> id}} </td>
                        <td>{{$item -> nama}}</td>
                        <td>{{$item -> judul}}</td>
                        <td>{{ Str::limit($item -> deskripsi, 50) }}</td>
                        <td>
                            <img src="@if (!$item -> image)
                                            {{ asset('/assets/img/home/'.$item -> nama.'.jpeg') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" width="100px">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="/adminprocess/{{$item -> id}}/edit"><i class="bi bi-pencil-square"></i></a>
                            <form action="/adminprocess/{{$item -> id}}" method="POST" class="d-inline">@csrf
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
            {{$process -> links()}}
        </div>
    </div>
</div>


@endsection