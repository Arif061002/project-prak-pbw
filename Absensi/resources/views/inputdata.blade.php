@extends('template')
@section('title', 'Input Data absensi')

@section('konten')
    <form action="/absensi/store" method ="get">
        {{csrf_field()}}
        
            <center> 
         id <br>  <input type=text, name="id", required="required"><br>
        nama <br> <input type=text, name="nama", required="required"><br>
        nim <br><input type=text, name="nim", required="required"><br>
        kehadiran <br> <input type=text, name="kehadiran", required="required"><br>
        <br> <input type="submit" value="Simpan Data"> 
            </center>
    </form>
  
@endsection