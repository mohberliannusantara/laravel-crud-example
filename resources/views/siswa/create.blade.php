@extends('template.index')

@section('title', 'Tambah Siswa')

@section('content')
    <form action="/siswa" method="post">
        @csrf
        <div align="left">
            <label for="nama">Nama Siswa</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" placeholder="Nama">
            @if($errors->has('nama'))
                <p align="left"><b>{{ $errors->first('nama') }}</b></p>
            @endif
        </div>

        <br>

        <div align="left">
            <label>Jenis Kelamin</label> <br>
            <label for="lk">
                <input type="radio" name="jklm" id="lk" value="1" {{ old('jklm') ? 'checked' : '' }}>
                <span>Laki - Laki</span>
            </label>

            <label for="pr">
                <input type="radio" name="jklm" id="pr" value="0" {{ old('jklm') ? '' : 'checked' }}>
                <span>Perempuan</span>
            </label>

            @if($errors->has('jklm'))
                <p align="left"><b>{{ $errors->first('jklm') }}</b></p>
            @endif
        </div>

        <br>

        <div align="left">
            <label for="" class="control-label">Jurusan</label>

            <select class="form-control" name="id_jurusan">
                <option selected disabled>Pilih Jurusan</option>
                @foreach($jurusan as $value)
                    <option value="{{ $value->id_jurusan }}" {{ $value->id_jurusan == old('id_jurusan') ? 'selected' : '' }}>{{ $value->nama }}</option>
                @endforeach
            </select>
        </div>

        <br>

        <div align="left">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>

    </form>
@endsection