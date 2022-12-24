@extends('admin.layout.main')
@section('title'){{'Create feature'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Feature</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/adminfeature" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Logo</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama">
                        <div id="textHelp" class="form-text">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                        <input type="Textarea" class="form-control" id="exampleInputPassword1" name="deskripsi">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-success " href="/adminfeature">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection