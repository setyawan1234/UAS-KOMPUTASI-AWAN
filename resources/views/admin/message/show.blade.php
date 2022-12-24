@extends('admin.layout.main')
@section('title'){{'Show Message'}} @endsection
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-start rounded p-4">
        <div class="card">
            <div class="card-header">
                Detail Message
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No : </b>{{$message->id}}</li>
                    <li class="list-group-item"><b>Nama : </b>{{$message->nama}}</li>
                    <li class="list-group-item"><b>Email : </b>{{$message->email}}</li>
                    <li class="list-group-item"><b>Subject : </b>{{$message->subjek}}</li>
                    <li class="list-group-item"><b>Message : </b>{{$message->pesan}}</li>
                </ul>
                <a class="btn btn-success mt-3" href="/adminmessage">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection