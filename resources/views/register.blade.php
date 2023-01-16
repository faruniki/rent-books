@extends('layout')

@section('content')

<link rel="stylesheet" href="assets/css/register.css">

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Form Pendaftaran PPDB</div>
    <p class="smkwikrama">SMK Wikrama Bogor TP. 2023-2024</p>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Lengkap</span>
            <input type="text" placeholder="Masukkan Nama Lengkap" required>
          </div>
          <div class="input-box">
            <span class="details">NISN</span>
            <input type="text" placeholder="Masukkan NISN" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Masukkan Email" required>
          </div>
          <div class="input-box">
            <span class="details">No Handphone</span>
            <input type="text" placeholder="Contoh : 089512345678" required>
          </div>
          <div class="input-box">
            <span class="details">No HP Ayah</span>
            <input type="text" placeholder="Contoh : 089512345678" required>
          </div>
          <div class="input-box">
            <span class="details">No HP Ibu</span>
            <input type="text" placeholder="Contoh : 089512345678" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Kelamin</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          </div>

        </div>
        <div class="button">
          <input type="submit" value="REGISTER" class="register-button">
        </div>
      </form>
    </div>
  </div>

</body>
</html>


@endsection