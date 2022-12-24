@extends('admin.layout.main')
@section('title'){{'Edit Grade'}} @endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Grade</h6>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/admingrade/{{$grade -> id}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <select class="form-select" name="categories_id">
                            @foreach ($kategori as $ctgr)
                            <option value="{{ $ctgr->id }}" @if($ctgr->id==$grade->categories_id) selected @endif>{{ $ctgr->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Produk</label>
                        <select class="form-select" name="products_id">
                            @foreach ($kategori as $ctgr)
                            <option value="{{ $ctgr->id }}" @if($ctgr->id==$grade->products_id) selected @endif>{{ $ctgr->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Grade</label>
                        <input value="{{$grade -> grade}}" type="text" class="form-control" id="exampleInputPassword1" name="grade">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Screen</label>
                        <input value="{{$grade -> screen}}" type="text" class="form-control" id="exampleInputPassword1" name="screen">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Above Screen 18</label>
                        <input value="{{$grade -> above}}" type="text" class="form-control" id="exampleInputPassword1" name="above">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Defect Max.</label>
                        <input value="{{$grade -> defect}}" type="text" class="form-control" id="exampleInputPassword1" name="defect">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Imperfect Max.</label>
                        <input value="{{$grade -> imperfect}}" type="text" class="form-control" id="exampleInputPassword1" name="imperfect">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Process</label>
                        <input value="{{$grade -> process}}" type="text" class="form-control" id="exampleInputPassword1" name="process">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Variety</label>
                        <input value="{{$grade -> variety}}" type="text" class="form-control" id="exampleInputPassword1" name="variety">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Moisture Max.</label>
                        <input value="{{$grade -> maisture}}" type="text" class="form-control" id="exampleInputPassword1" name="maisture">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    <a class="btn btn-success mt-3" href="/admingrade">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection