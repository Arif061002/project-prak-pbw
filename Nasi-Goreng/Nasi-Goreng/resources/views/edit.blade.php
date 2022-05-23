@extends('template')
@section('title', 'Edit Data Mahasiswa')

@section('konten')
    @foreach($mahasiswa as $mhs)
        <form action="/mahasiswa/update" method ="get">
            {{csrf_field()}}
            Nama Lengkap <br>  <input type=text, name="nama", required="required", value="{{$mhs->nama}}"><br>
            NIM <br> <input type=text, name="nim", required="required", value="{{$mhs->nim}}"><br>
            Jurusan <br><input type=text, name="jurusan", required="required", value="{{$mhs->jurusan}}"><br>
            Fakultas <br> <input type=text, name="fakultas", required="required", value="{{$mhs->fakultas}}"><br>
            Universitas <br> <input type=text, name="universitas", required="required", value="{{$mhs->univ}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
@endsection