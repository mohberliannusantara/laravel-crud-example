@extends('template')

@section('title', 'Halaman Siswa')

@section('content')
    <h1>Selamat Datang di halaman siswa</h1>
    <br>
    <a class="btn btn-primary" href="/siswa/create">Tambah Data</a>
    <br><br>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th colspan="2">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($siswa as $key => $value)
            <tr align="left">
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->jklm ? 'laki-laki' : 'perempuan' }}</td>
                <td>{{ $value->id_jurusan }}</td>
                <td><a href="/siswa/{{ $value->id_siswa }}/edit" class="btn btn-warning">Ubah</a></td>
                <td>
                    <form action="/siswa/{{ $value->id_siswa }}" method="post">
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