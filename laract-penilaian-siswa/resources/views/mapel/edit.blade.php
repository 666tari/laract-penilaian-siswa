@extends('main.layout')
@section('content')
    <center>
        <h2>EDIT DATA MATA PELAJARAN</h2>
        <form action="/mapel/update/{{ $mapel->id }}" method="post">
            @csrf
            <table widht="50%">
                <tr>
                    <td widht="25%">MATA PELAJARAN</td>
                    <td widht="25%"><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" classs="button-primary">UBAH</button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection
