@extends('admin.layout.main')
@section('title'){{'Create Product'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Product</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/adminproduk" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama">
                        <div id="textHelp" class="form-text">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <select class="form-select" name="categories_id">
                            @foreach ($kategori as $ctgr)
                            <option value="{{ $ctgr->id }}">{{ $ctgr->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="form-group">
                        <label for="status" class="mb-2">Klasifikasi</label>
                        <select class="form-select" name="status">
                            <option value="1">Roasted</option>
                            <option value="2">Coffee Bean</option>
                            <option value="3">Powder</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                        <input type="Textarea" class="form-control" id="exampleInputPassword1" name="deskripsi">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-success " href="/adminproduk">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection