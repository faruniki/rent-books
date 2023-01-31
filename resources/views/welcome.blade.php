<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background-color: #222222;">

<!-- navbar -->
<nav class="navbar navbar-dark navbar-expand-lg bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png" alt="Bootstrap" width="30" height="24">
            <b>Rent Books</b>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Horror</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-danger btn-sm" href="{{route('login')}}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- akhir navbar -->

<!-- carousel -->
<div id="carouselExampleInterval" class="carousel slide" style="max-height: 200px; max-width: 100%;" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="https://images.unsplash.com/photo-1674641672189-f3de2f2cfc31?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="..." style="max-height: 200px; object-fit: cover;">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://images.unsplash.com/photo-1674641986446-c1a5fa900533?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" class="d-block w-100" alt="..." style="max-height: 200px; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1669336048171-56005de24767?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1030&q=80" class="d-block w-100" alt="..." style="max-height: 200px; object-fit: cover;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- akhir carousel -->

<!-- jumbotron -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <h2 class="text-light">Rent Books</h2>
                <a href="{{route('register')}}" class="btn btn-outline-danger mt-1 text-light">Ayo Daftar Sekarang!</a>
            </div>
            <div class="col-8 text-light">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio magni aperiam animi, quas adipisci ab voluptatum aliquid vero quos laudantium illum! Nihil doloribus qui quam deserunt amet odio voluptatibus tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea reiciendis iste nulla magnam, neque repellat nemo laudantium vero porro cumque error non, quas adipisci.</p>
            </div>
        </div>
    </div>
<!-- akhir jumbotron -->

<!-- card popular books -->
<section style="background-color: #DC3545;">
    <div class="container my-5">
        <div class="row text-center">
            <h2 class="mt-5 text-light">Popular Books</h2>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-5"> 
                <div class="card" style="width: 18rem;">
                    <img src="https://www.gramedia.com/blog/content/images/2020/05/misteri-terakhir_gramedia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mistery Terakhir</h5>
                        <p class="card-text">Thriller, Mystery</p>
                        <a href="#" class="btn btn-danger">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.squarespace-cdn.com/content/v1/584a706a5016e156a519319e/1509088453632-3QSOUY0ZKRN42YM05ZMN/81CfbcFFyHL.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Uzumaki</h5>
                        <p class="card-text">Comic, Horror, Thriller</p>
                        <a href="#" class="btn btn-danger">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.gramedia.com/uploads/items/9786230402128_Afeksi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Afeksi</h5>
                        <p class="card-text">Novel, Drama</p>
                        <a href="#" class="btn btn-danger">Read</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir card popular books -->

<!-- contact -->
<div class="container">
    <div class="row text-center">
        <h2 class="text-light">Message</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <form action="{{route('message')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label text-light">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="nama">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label text-light">Message</label>
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Send</button>
            </form>
        </div>
    </div>
</div>
<!-- akhir contact -->

<!-- footer -->
<footer class="bg-danger mt-5" style="height: 40px;">
    <p class="text-center text-light pt-2">Created by <a href="https://github.com/faruniki" target="_blank" style="text-decoration: none; color: #fff;"><b>&#169;</b> Nazib Akbar</a></p>
</footer>
<!-- akhir footer -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</body>
</html>