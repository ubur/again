@extends('layouts/aplikasi')

@section('konten')
    <div>
        <a href="/siswa" class="btn btn-secondary">Kembali</a>
        <h1> {{ $data->nama }} </h1>
        <p>
            <b>Nomer Induk</b>{{ $data->nomer_induk }}
        </p>
        <p>
            <b>Alamat</b>{{ $data->alamat }}
        </p>
    </div>
@endsection
