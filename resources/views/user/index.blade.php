@extends('layouts.user')

@section('content')
@section('title', 'Home User')

<style>
    body {
        background-color: #198754;
    }
</style>

<section class="bg-success">
    <div class="container my-5">
        <div class="row text-center">
            <h2 class="mt-5 text-light">Popular Books</h2>
        </div>
        <div class="row mt-5 ms-4">
            <div class="col-md-4 mb-5"> 
                <div class="card" style="width: 18rem;">
                    <img src="https://www.gramedia.com/blog/content/images/2020/05/misteri-terakhir_gramedia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mistery Terakhir</h5>
                        <p class="card-text">Thriller, Mystery</p>
                        <a href="#" class="btn btn-success">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.squarespace-cdn.com/content/v1/584a706a5016e156a519319e/1509088453632-3QSOUY0ZKRN42YM05ZMN/81CfbcFFyHL.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Uzumaki</h5>
                        <p class="card-text">Comic, Horror, Thriller</p>
                        <a href="#" class="btn btn-success">Read</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.gramedia.com/uploads/items/9786230402128_Afeksi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Afeksi</h5>
                        <p class="card-text">Novel, Drama</p>
                        <a href="#" class="btn btn-success">Read</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection