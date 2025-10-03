@extends('layout')

    @section('content')
    <div class="content-detail">
        <div class="content-title">
            <h2> Detail Siswa </h2>
        </div>
        <div class="content-card">
            <ul class="list-group">
                <li class="list-group-item"><b>NIS: </b>{{ $siswa->nis }}</li>
                <li class="list-group-item"><b>NAMA: </b>{{ $siswa->nama }}</li>
                <li class="list-group-item"><b>KELAS: </b>{{ $siswa->kelas }}</li>
                <li class="list-group-item"><b>JURUSAN: </b>{{ $siswa->jurusan }}</li>
            </ul>
        </div>
        <a href="{{ route('siswa.index') }}"><button> Kembali </button></a>
    </div>
    @endsection
