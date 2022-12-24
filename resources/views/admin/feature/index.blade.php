@extends('admin.layout.main')
@section('title'){{'Feature'}} @endsection
@section('content')
@include('sweetalert::alert')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Feature</h6>
            <a href="/adminfeature/create" class="btn btn-primary">Create Feature</a>
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
                        <th scope="col">Logo</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feature as $item)
                    <tr>
                        <td>{{$item -> id}} </td>
                        <td>
                            <img src="@if (!$item -> image)
                                            {{ asset('/assets/img/feature/'.$item -> nama.'.png') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" width="100px">
                        </td>
                        <td>{{$item -> nama}}</td>
                        <td>{{ Str::limit($item -> deskripsi, 50) }}</td>
                        <td>
                            <a class="btn btn-primary" href="/adminfeature/{{$item -> id}}/edit"><i class="bi bi-pencil-square"></i></a>
                            <form action="/adminfeature/{{$item -> id}}" method="POST" class="d-inline">@csrf
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
            {{$feature -> links()}}
        </div>
    </div>
</div>


@endsection