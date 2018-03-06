@extends('template')

@section('title', 'Halaman Jurusan')

@section('content')
    <h1>Selamat Datang di halaman jurusan</h1>
    <br>
    <a class="btn btn-primary" href="/jurusan/create">Tambah Data</a>
    <br><br>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th colspan="2">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jurusan as $key => $value)
            <tr align="left">
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->nama }}</td>
                <td><a href="/jurusan/{{ $value->id_jurusan }}/edit" class="btn btn-warning">Ubah</a></td>
                <td>
                    <form action="/jurusan/{{ $value->id_jurusan }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection