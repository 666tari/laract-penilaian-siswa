<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title> LARACT PENILAIAN SISWA</title>
</head>

<body>

<!-- Header -->
<div class="header">
    <img src="{{ asset('gambar/header.jpg') }}" width="100%" height="40%">
</div>

<!-- Menu -->
<div class="menu">
    <b>
        <a href="/Home">HOME</a>
        <a href="/guru/index">GURU</a>
        <a href="/jurusan/index">JURUSAN</a>
        <a href="/kelas/index">KELAS</a>
        <a href="/siswa/index">SISWA</a>
        <a href="/mapel/index">MATA PELAJARAN</a>
        <a href="/mengajar/index">MENGAJAR</a>
        <a href="/nilai/index">NILAI</a>
    <a href="/logout">LOGOUT</a>
    </b>
</div>

    <!-- Content -->
    @yield('content')


    <!-- Footer -->
    <div class="footer">
        <center>
            <p>
                &copy; {{ date('Y') }} - UJIKOM LSP
            </p>
        </center>
    </div>
</body>
<html>