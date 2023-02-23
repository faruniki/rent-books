@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')

<h2 class="ms-3 my-3">Halo, Admin</h2>
<div class="row ms-1 me-1 my-4">
    <div class="col-lg-4">
        <div class="card-data book mb-4">
            <div class="row">
                <div class="col-lg-6">
                <i class="bi bi-journals"></i>
                </div>
                <div class="col-lg-6 d-flex justify-content-end align-items-end flex-column">
                    <div class="card-desc">
                        Books
                    </div>
                    <div class="card-count">
                        {{$book->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data user mb-4">
            <div class="row">
                <div class="col-lg-6">
                <i class="bi bi-people"></i>
                </div>
                <div class="col-lg-6 d-flex justify-content-end align-items-end flex-column">
                    <div class="card-desc">
                        Users
                    </div>
                    <div class="card-count">
                        {{$user->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data category mb-4">
            <div class="row">
                <div class="col-lg-6">
                <i class="bi bi-tags"></i>
                </div>
                <div class="col-lg-6 d-flex justify-content-end align-items-end flex-column">
                    <div class="card-desc">
                        Categories
                    </div>
                    <div class="card-count">
                        {{$category->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection