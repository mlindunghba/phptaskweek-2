@extends('layouts.master')
@section('title', 'Data Mahasiswa')
@section('content')
<div class="container-fluid">
    <div class="col-8" style="padding-top: 20px;">
        @include('layouts.feedback')
        <form action="{{route('mahasiswa.search')}}" method="post" class="col-12 row">
            @csrf
            <div class="col-2">
                <p>Cari Berdasarkan Nama</p>
            </div>
            <div class="col-8">
                <input type="text" name="search" class="form-control">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-info">Search</button>
            </div>
        </form>
        <div class="col-12">
            <a href="{{url('mahasiswa/create')}}" class="btn btn-success">Tambah Mahasiswa</a>
        </div>
        <table class="table table-default table-bordered">
            <thead class="bg-success">
                <th>#</th>
                <th>NPM/NIM</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </thead>
            @php($i = 1)
            @foreach($mhs as $m)
            <tbody>
                <td>{{$i++}}</td>
                <td>{{$m->nim}}</td>
                <td>{{$m->nama_lengkap}}</td>
                <td>{{$m->kelas}}</td>
                <td>{{$m->jurusan}}</td>
                <td>
                    <a href="{{route('mahasiswa.edit', $m->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('mahasiswa.delete', $m->id)}}" class="btn btn-danger">Hapus</a>
                </td>
            </tbody>
            @endforeach
        </table>
    </div>
    {{$mhs->links()}}
</div>
@endsection