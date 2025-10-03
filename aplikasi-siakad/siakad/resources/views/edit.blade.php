@extends('layout')

    @section('content')
    <div class="content-edit">
        <div class="title-card">
            <h2> Tambah Data Siswa Baru </h2>
        </div>
        <div class="card-error-message">
            @if($errors->any())
                <p><strong>Oops...</strong> found problems with:</p>
                <div class="error-card">
                    @foreach($errors->all() as $error)
                        <p>-> {{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="form-box">
            <form action="{{ route('siswa.update',$siswa) }}" method="post" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Nis">Nis</label>
                    <input type="text" name="Nis" class="form-control" id="Nis" value="{{ $siswa->nis }}">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $siswa->nama }}">
                </div>
                <div class="form-group">
                    <label for="Kelas">Kelas</label>
                    <input type="text" name="Kelas" class="form-control" id="Kelas" value="{{ $siswa->kelas }}">
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="Jurusan" class="form-control" id="Jurusan" value="{{ $siswa->jurusan }}">
                </div>
                <button type="submit" class="submit-button">Edit</button>
            </form>
        </div>
    @endsection
