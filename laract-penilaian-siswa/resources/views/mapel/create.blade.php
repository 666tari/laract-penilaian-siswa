@extends('main.layout')
@section('content')
<center>
    <h2>TAMBAH DATA MATA PELAJARAN</h2>
    <form action="/mapel/store" method="post">
        @csrf
        <table width="50%">
            <tr>
                <td widht="25%">MATA PELAJARAN</td>
                <td widht="25%"><input type="text" name="nama_mapel"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button type="submit" class="button-primary"></td>
                </td>
            </tr>
        </table>
    </form>
</center>
@endsection