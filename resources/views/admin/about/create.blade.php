@extends('admin.layout.main')
@section('title'){{'Create About'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah About</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/adminabout" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Head</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="head">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">intro 1</label>
                        <input type="Textarea" class="form-control" id="exampleInputPassword1" name="intro1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">intro 2</label>
                        <input type="Textarea" class="form-control" id="exampleInputPassword1" name="intro2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">intro 3</label>
                        <input type="Textarea" class="form-control" id="exampleInputPassword1" name="intro3">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar 1</label>
                        <input class="form-control" type="file" id="formFile" name="image1">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar 2</label>
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