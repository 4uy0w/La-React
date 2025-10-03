@extends('layout')

    @section('content')
    <div class="row-content">
        <div class="row-content-title">
            <h2> Jurusan Rekayasa Perangkat Lunak SMK PGRI 3 Kota Malang </h2>
        </div>
        <div class="row-content-action">
            <a href="{{ route('siswa.create') }}"><button class="button-add-data"><b id="bold-plus">+ </b>Tambah Data</button></a>
        </div>
    </div>

    @if($message = Session::get("success"))
        <div class="message-alert-success">
            <p id="message"> {{ $message }} </p>
        </div>
    @endif
    @if($message = Session::get("error"))
        <div class="message-alert-error">
            <p id="message"> {{ $message }} </p>
        </div>
    @endif

    <div class="table-content">
        <table class="table-bordered">
            <tr id="row-head">
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Tindakan</th>
            </tr>

            @foreach($siswa as $sw)
            <tr>
                <td> {{ $sw->nis }} </td>
                <td> {{ $sw->nama }} </td>
                <td> {{ $sw->kelas }} </td>
                <td> {{ $sw->jurusan }} </td>
                <td id="action-col">
                    <form action="{{ route('siswa.destroy',['siswa' => $sw]) }}" method="post" id="myForm">
                        <a href="{{ route('siswa.edit',$sw) }}"><button class="edit-button" type="button">Edit</button></a>
                        <a href="{{ route('siswa.show',$sw) }}"><button class="show-button" type="button">Show</button></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endsection
