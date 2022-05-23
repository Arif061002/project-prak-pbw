@extends('template')
@section('title', 'Edit Data Absensi')

@section('konten')
    @foreach($absensi as $mhs)
        <form action="/absensi/update" method ="get">
            {{csrf_field()}}
            id  <br>  <input type=text, name="id", required="required", value="{{$mhs->id}}"><br>
            nama <br> <input type=text, name="nama", required="required", value="{{$mhs->nama}}"><br>
            nim <br><input type=text, name="nim", required="required", value="{{$mhs->nim}}"><br>
            kehadiran <br> <input type=text, name="kehadiran", required="required", value="{{$mhs->kehadiran}}"><br>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
@endsection