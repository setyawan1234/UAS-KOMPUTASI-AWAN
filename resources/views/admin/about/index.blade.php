@extends('admin.layout.main')
@section('title'){{'About'}} @endsection
@section('content')
@include('sweetalert::alert')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data About</h6>
            <a href="/adminabout/create" class="btn btn-primary">Create About</a>
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
                        <th scope="col">Judul</th>
                        <th scope="col">Head</th>
                        <th scope="col">Intro 1</th>
                        <th scope="col">Intro 2</th>
                        <th scope="col">Intro 3</th>
                        <th scope="col">Image 1</th>
                        <th scope="col">Image 2</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($about as $item)
                    <tr>
                        <td>{{$item -> id}} </td>
                        <td>{{$item -> judul}}</td>
                        <td>{{ Str::limit($item -> head, 30) }}</td>
                        <td>{{ Str::limit($item -> intro1, 30) }}</td>
                        <td>{{ Str::limit($item -> intro2, 30) }}</td>
                        <td>{{ Str::limit($item -> intro3, 30) }}</td>
                        <td>
                            <img src="@if (!$item -> image1)
                                            {{ asset('/assets/img/about/'.$item -> judul.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$item -> image1)}}
                                          @endif" width="100px">
                        </td>
                        <td>
                            <img src="@if (!$item -> image2)
                                            {{ asset('/assets/img/about/'.$item -> id.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$item -> image2)}}
                                            
                                          @endif" width="100px">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="/adminabout/{{$item -> id}}/edit"><i class="bi bi-pencil-square"></i></a>
                            <form action="/adminabout/{{$item -> id}}" method="POST" class="d-inline">@csrf
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
            {{$about -> links()}}
        </div>
    </div>
</div>


@endsection