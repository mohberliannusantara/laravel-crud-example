@extends('template')

@section('title', 'Tambah Jurusan')

@section('content')
    <form action="/jurusan" method="post">
        @csrf
        {{-- Input Nama --}}
        <div class="form-group">
            <label for="nama">Nama Jurusan</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" placeholder="Nama Jurusan">
            @if($errors->has('nama'))
                <small class="text-danger">{{ $errors->first('nama') }}</small>
            @endif
        </div>

        {{-- Input Submit --}}
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection