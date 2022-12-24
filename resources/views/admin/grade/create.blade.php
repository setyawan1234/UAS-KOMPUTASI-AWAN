@extends('admin.layout.main')
@section('title'){{'Create Grade'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create Grade</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/admingrade" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <select class="form-select" name="categories_id">
                            @foreach ($kategori as $ctgr)
                            <option value="{{ $ctgr->id }}">{{ $ctgr->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Produk</label>
                        <select class="form-select" name="products_id">
                            @foreach ($product as $prdk)
                            <option value="{{ $prdk->id }}">{{ $prdk->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Grade</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="grade">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Screen</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="screen">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Above Screen 18</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="above">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Defect Max.</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="defect">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Imperfect Max.</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="imperfect">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Process</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="process">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Variety</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="variety">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Moisture Max.</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="maisture">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    <a class="btn btn-success mt-3" href="/admingrade">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection