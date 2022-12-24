@extends('admin.layout.main')
@section('title'){{'Grade'}} @endsection
@section('content')
@include('sweetalert::alert')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Data Grade</h6>
            <a href="/admingrade/create" class="btn btn-primary">Create Grade</a>
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
                <thead class="align-baseline">
                    <tr class="text-dark">
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Screen</th>
                        <th scope="col">Above Screen 18</th>
                        <th scope="col">Defect Max.</th>
                        <th scope="col">Imperfect Max.</th>
                        <th scope="col">Process</th>
                        <th scope="col">Variety</th>
                        <th scope="col">Moisture Max.</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grade as $item)
                    <tr>
                        <td>{{$item -> id}} </td>
                        <td>{{$item -> category -> nama}}</td>
                        <td>{{$item -> product -> nama}}</td>
                        <td>{{$item -> grade}} </td>
                        <td>{{$item -> screen}}</td>
                        <td>{{$item -> above}}</td>
                        <td>{{$item -> defect}} </td>
                        <td>{{$item -> imperfect}}</td>
                        <td>{{$item -> process}}</td>
                        <td>{{$item -> variety}} </td>
                        <td>{{$item -> maisture}}</td>
                        <td>
                            <a class="btn btn-primary" href="/admingrade/{{$item -> id}}/edit"><i class="bi bi-pencil-square"></i></a>

                            <form action="/admingrade/{{$item -> id}}" method="POST" class="d-inline">@csrf
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
            {{$grade -> links()}}
        </div>
    </div>
</div>
@endsection