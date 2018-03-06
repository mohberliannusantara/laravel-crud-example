@extends('template')

@section('title', 'Tambah Siswa')

@section('content')
    <form action="/siswa/{{ $siswa->id_siswa }}" method="post">
        @csrf
        @method('put')

        {{-- Input Nama --}}
        <div class="form-group">
            <label for="nama">Nama Siswa</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Siswa" value="{{ old('nama', $siswa->nama) }}">
            @if($errors->has('nama'))
                <small id="helpId" class="text-danger">{{ $errors->first('nama') }}</small>
            @endif
        </div>

        {{-- Input Jenis Kelamin --}}
        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <div class="checkbox-inline">
                <input type="radio" name="jklm" id="lk" value="1" {{ old('jklm', $siswa->jklm) ? 'checked' : '' }}>
                <label for="lk">Laki - Laki</label>
                &nbsp;
                <input type="radio" name="jklm" id="pr" value="0" {{ old('jklm', $siswa->jklm) ? '' : 'checked' }}>
                <label for="pr">Perempuan</label>
            </div>
            @if($errors->has('jklm'))
                <small id="helpId" class="text-danger">{{ $errors->first('jklm') }}</small>
            @endif
        </div>

        {{-- Input Nama Jurusan --}}
        <div class="form-group">
            <label for="id_jurusan">Nama Jurusan</label>
            <select class="form-control" name="id_jurusan" id="id_jurusan">
                <option selected disabled>Pilih Jurusan</option>
                @foreach($jurusan as $value)
                    <option value="{{ $value->id_jurusan }}" {{ $value->id_jurusan == old('id_jurusan', $siswa->id_jurusan) ? 'selected' : '' }}>{{ $value->nama }}</option>
                @endforeach
            </select>
            @if($errors->has('id_jurusan'))
                <small id="helpId" class="text-danger">{{ $errors->first('id_jurusan') }}</small>
            @endif
        </div>

        {{-- Input Submit --}}
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection