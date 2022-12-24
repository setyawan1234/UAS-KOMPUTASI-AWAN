@extends('admin.layout.main')
@section('title'){{'Edit Pengambilan'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Pengambilan</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/adminpengambilan/{{$pengambilan -> id}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pengirim</label>
                        <input value="{{$pengambilan -> nama_pengambil}}" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama_pengambil">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <select class="form-select" name="category_id">
                            @foreach ($kategori as $ctgr)
                            <option value="{{ $ctgr->id }}" @if($ctgr->id==$pengambilan->category_id) selected @endif>{{ $ctgr->nama }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                        <input value="{{$pengambilan -> jumlah}}" type="text" class="form-control" id="exampleInputPassword1" name="jumlah">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                        <input value="{{$pengambilan -> lokasi}}" type="text" class="form-control" id="exampleInputPassword1" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input value="{{$pengambilan -> tanggal_ambil}}" type="date" class="form-control" id="exampleInputPassword1" name="tanggal_ambil">
                    </div>
                    <div class="form-group">
                        <label for="status" class="mb-2">Status</label>
                        <select class="form-select" name="status">
                            <option value="1">Diambil</option>
                            <option value="2">Terjual</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    <a class="btn btn-success mt-3" href="/adminpengambilan">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection