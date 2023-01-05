@extends('layout')

@section('content')

<link rel="stylesheet" href="{{asset('assets/css/index.css')}}">


<div class="atas">
<header class="headernav">
    <a href="#" class="logo">SMK WIKRAMA BOGOR</a>
    <nav class="navbar">
        <li class="homenav">HOME</li>
        <li>MAJORS</li>
        <li>TESTIMONIAL</li>
        <li>CONTACT</li>
        <li>LOGIN</li>
    </nav>
</header>
<p class="welcome">SELAMAT DATANG</p>
<p class="ppdb-hl">PENDAFTARAN PESERTA DIDIK BARU<br>SMK WIKRAMA BOGOR<br>TELAH DIBUKA</p>
<p class="segera">Segera daftarkan dirimu ke SMK Wikrama Bogor<br>dengan menekan tombol pendaftaran dibawah</p>
<p class="button-daftar"><a href="/register">DAFTAR</a></p>
<div class="majors">

</div>
</div>

@endsection