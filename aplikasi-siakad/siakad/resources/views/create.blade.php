@extends('layout')

    @section('content')
    <div class="content-add">
        <div class="title-card">
            <h2> Tambah Data Siswa Baru </h2>
        </div>
        <div class="message-alert-error">
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
            <form action="{{ route('siswa.store') }}" method="post" id="myForm">
                @csrf
                <div class="form-group">
                    <label for="Nis">Nis</label>
                    <input type="text" name="Nis" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Kelas">Kelas</label>
                    <input type="text" name="Kelas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="Jurusan" class="form-control">
                </div>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    @endsection
