<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Books | @yield('title')</title>
    <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
    .sidebar button{
    background-color: #222;
    color: #FFF;
    font-size: 14px;
    border: none;
    display: block;
    padding: 20px 125px 20px 30px;
}

.sidebar button i {
    margin-right: 8px;
}

.sidebar button:hover{
    background-color: #000;
    color: red;
}

.sidebar button.active{
    background-color: #000;
    border-right: solid 4px red;
}
</style>

<body>

    <div class="main d-flex flex-column justify-content-between">
        <!-- navbar -->
        <nav class="navbar navbar-dark navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="main"><b class="ms-3">Rent Books</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </nav>
        <!-- akhir navbar -->

        <!-- content -->
        <div class="body-main h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    <a href="/dashboard" @if(request()->route()->uri == 'dashboard')class='active' @endif class="sidebar-title"><i class="bi bi-house-door"></i>Dashboard</a>
                    <a href="/user" @if(request()->route()->uri == 'user')class='active' @endif class="sidebar-title"><i class="bi bi-people"></i>Users</a>
                    <a href="{{route('books')}}" @if(request()->route()->uri == 'books')class='active' @endif class="sidebar-title"><i class="bi bi-book"></i>Books</a>
                    <a href="/category" @if(request()->route()->uri == 'category')class='active' @endif class="sidebar-title"><i class="bi bi-tags"></i>Categories</a>
                    <a href="/rent-log" @if(request()->route()->uri == 'rent-log')class='active' @endif class="sidebar-title"><i class="bi bi-door-open"></i>Rent Logs</a>
                    <form action="{{route('logout')}}" method="post">@csrf<button ><i class="bi bi-box-arrow-left"></i>Logout</button></form>
                </div>
                <div class="content col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>  
        <!-- akhir content -->
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</body>
</html>