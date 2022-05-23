@extends('template')
@section('title', 'Input Data Mahasiswa')

@section('konten')
    <form action="/mahasiswa/store" method ="get">
        {{csrf_field()}}
        Nama Lengkap <br>  <input type=text, name="nama", required="required"><br>
        NIM <br> <input type=text, name="nim", required="required"><br>
        Jurusan <br><input type=text, name="jurusan", required="required"><br>
        Fakultas <br> <input type=text, name="fakultas", required="required"><br>
        Universitas <br> <input type=text, name="universitas", required="required"><br>
        <input type="submit" value="Simpan Data">
    </form>

@endsection