@extends('layouts/aplikasi')

@section('konten')
    <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah data</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nomer Induk</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td> {{ $item->nomer_induk }} </td>
                    <td> {{ $item->nama }} </td>
                    <td> {{ $item->alamat }} </td>
                    <td> <a class="btn btn-secondary btn-sm" href="{{ url('/siswa/' . $item->nomer_induk) }}">Detail</a> </td>
                    <td> <a class="btn btn-warning btn-sm" href="{{ url('/siswa/' . $item->nomer_induk . '/edit') }}">Edit</a>
                        <form onsubmit="return corfirm('Data Akan Di Hapus')" class="d-inline"
                            action="{{ '/siswa/' . $item->nomer_induk }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection
