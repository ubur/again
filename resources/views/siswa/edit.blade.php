@extends('layouts/aplikasi')

@section('konten')
    <form method="post" action="{{ '/siswa/' . $data->nomer_induk }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nomer_induk" class="form-label">Nomer Induk</label>
            <h1> {{ $data->nomer_induk }} </h1>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control">{{ $data->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/siswa" class="btn btn-secondary">Kembali</a>
        </div>

    </form>
@endsection
