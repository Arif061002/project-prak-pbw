@extends('template')
@section('title', 'Data Mahasiswa')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <h2> Data Mahasiswa </h2>
	<div class="row">
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Fakultas</th>
                    <th>Universitas</th>
                </thead>
            <tbody> 
                @foreach($mahasiswa as $mhs)
                <tr>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td>{{$mhs->fakultas}}</td>
                    <td>{{$mhs->univ}}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $mhs->nim}}">Edit</a>
                        <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                        <a style="color:red;" href="/mahasiswa/hapus/{{ $mhs->nim}}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection