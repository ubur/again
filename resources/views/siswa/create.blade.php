@extends('layouts/aplikasi')

@section('konten')
    <form method="post" action="/siswa">
        @csrf
        <div class="mb-3">
            <label for="nomer_induk" class="form-label">Nomer Induk</label>
            <input type="text" class="form-control" name="nomer_induk" id="nomer_induk"
                value="{{ Session::get('nomer_induk') }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ Session::get('nama') }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control">{{ Session::get('alamat') }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
