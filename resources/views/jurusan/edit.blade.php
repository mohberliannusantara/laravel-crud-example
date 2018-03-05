@extends('template.index')

@section('title', 'Ubah Jurusan')

@section('content')
    <form action="/jurusan/{{ $jurusan->id_jurusan }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $jurusan->nama) }}" placeholder="Nama Jurusan">
                @if($errors->has('nama'))
                    <p align="left"><b>{{ $errors->first('nama') }}</b></p>
                @endif
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-block btn-success">Simpan</button>
            </div>
        </div>
    </form>
@endsection