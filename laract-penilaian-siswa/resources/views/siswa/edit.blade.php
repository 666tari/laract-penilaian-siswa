@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA SISWA</h2>
        <form action="/siswa/update/{{ $siswa->id }}" method="POST">
            @csrf
            <table width=50%>
                <tr>
                    <td widht="25%">NIS</td>
                    <td widht="25%"><input type="text" name="nis" value="{{ $siswa->nis }}"></td>
                </tr>
                <tr>
                    <td widht="25%">NAMA SISWA</td>
                    <td widht="25%"><input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}"></td>
                </tr>
                <tr>
                    <td widht="25%">JENIS KELAMIN</td>
                    <td widht="25%">
                        <input type="radio" name="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : '' }}>Laki-laki
                        <input type="radio" name="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : '' }}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td widht="25%">ALAMAT</td>
                    <td widht="25%"><textarea name="alamat" cols="30" rows="5">{{ $siswa->alamat }}</textarea></td>
                </tr>
                <tr>
                    <td widht="25%">KELAS</td>
                    <td widht="25%">
                        <select name="kelas_id">
                            <option></option>
                            @foreach ($kelas as $k)
                               @if ($siswa->kelas_id == $k->id)
                               <option value="{{ $k->id }}" selected>{{ $k->nama_kelas }}</option>
                               @endif
                               @endforeach
                        </select>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td widht="25%">PASSWORD</td>
                    <td widht="25%"><input type="password" name="password" value="{{ $siswa->password }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" class="button-primary">UBAH</button></center>
                        </td>
                </tr>
        </table>
    </form>
</center>
@endsection