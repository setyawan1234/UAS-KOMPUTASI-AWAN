@extends('admin.layout.main')
@section('title'){{'Edit About'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit About</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/adminabout/{{$about -> id}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul</label>
                        <input value="{{$about -> judul}}" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Head</label>
                        <input value="{{$about -> head}}" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="head">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">intro 1</label>
                        <input value="{{$about -> intro1}}" type="Textarea" class="form-control" id="exampleInputPassword1" name="intro1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">intro 2</label>
                        <input value="{{$about -> intro2}}" type="Textarea" class="form-control" id="exampleInputPassword1" name="intro2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">intro 3</label>
                        <input value="{{$about -> intro3}}" type="Textarea" class="form-control" id="exampleInputPassword1" name="intro3">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar 1</label><br>
                        <img src="@if (!$about -> image1)
                                            {{ asset('/assets/img/home/'.$about -> nama.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$about -> image1)}}
                                          @endif" alt="" width="100px">
                        <input class="form-control" type="file" id="formFile" name="image1">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar 2</label><br>
                        <img src="@if (!$about -> image2)
                                            {{ asset('/assets/img/home/'.$about -> nama.'.jpeg') }}
                                            @else
                                            {{asset('storage/'.$about -> image2)}}
                                          @endif" alt="" width="100px">
                        <input class="form-control" type="file" id="formFile" name="image2">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-success " href="/adminabout">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection