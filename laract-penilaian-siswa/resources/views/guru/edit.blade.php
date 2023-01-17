@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA GURU</h2>
        <form method="POST" action="/guru/update/{{ $guru->id }}">
            @csrf
            <table width=50%>
                <tr>
                    <td widht="25%">NIP</td>
                    <td widht="25%"><input type="text" name="nip" value="{{ $guru->nip }}"></td>
                </tr>
                <tr>
                    <td widht="25%">NAMA GURU</td>
                    <td widht="25%"><input type="text" name="nama_guru" value="{{ $guru->nama_guru }}"></td>
                </tr>
                <tr>
                    <td widht="25%">JENIS KELAMIN</td>
                    <td widht="25%">
                        <input type="radio" name="jk" value="L" {{ $guru->jk == 'L' ? 'checked' : ''}}">Laki-laki
                        <input type="radio" name="jk" value="P" {{ $guru->jk == 'P' ? 'checked' : ''}}">Perempuan
                    </td>
                </tr>
                <tr>
                    <td widht="25%">ALAMAT</td>
                    <td widht="25%"><textarea name="alamat" cols="30" rows="5">{{ $guru->alamat }}</textarea></td>
                </tr>
                <tr>
                    <td widht="25%">PASSWORD</td>
                    <td widht="25%"><input type="password" name="password" value="{{ $guru->password }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        </td>
                        <center><button class="button-primary" type="submit">UBAH</button></center>
                </tr>
            </form>
        </table>
    </center>
@endsection