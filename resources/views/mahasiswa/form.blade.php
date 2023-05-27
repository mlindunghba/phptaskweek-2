@extends('layouts.master')
@section('title', empty($data)?'Tambah':'Edit'.' Mahasiswa - '.$data->nama_lengkap)
@section('content')
<div class="container-fluid">
    <div class="col-8">
        @include('layouts.feedback')
        <form action="{{empty($data)?route('mahasiswa.store'):route('mahasiswa.update', $data->id)}}" method="POST">
            @csrf
            @if(!empty($data))
            @method('PUT')
            @endif
            <div class="col-12">
                <a href="{{route('mahasiswa.index')}}" class="btn btn-success">Lihat Data Mahasiswa</a>
            </div>
            <div class="col-12">
                <label for="nim">NPM / NIM</label>
                <input type="text" name="nim" class="form-control" value="{{empty($data)?null:$data->nim}}" required>
            </div>
            <div class="col-12">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="{{empty($data)?null:$data->nama_lengkap}}" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" value="{{empty($data)?null:$data->kelas}}" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="npm_nip">Jurusan</label>
                <input type="text" name="jurusan" value="{{empty($data)?null:$data->jurusan}}" class="form-control" required>
            </div>
            <div class="col-12">
                <br>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection