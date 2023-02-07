<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
<title>Rent Books | Login</title>
</head>
<body>
  <div class="container">
        <div class="kiri">
            <a href="/" class="linklogo"><p class="wikbooks">RENT BOOKS&#169;</p></a>
            <center>
            <form action="{{route('storeLogin')}}" class="formlogin" method="post">
                @csrf
                @if (session('loginerror'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session ('loginerror') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <label for="username" class="labelcoi labelemail">Username</label><br>
                <input type="text" class="inputform" name="username" id="" placeholder="Your Username"><br><br><br>
                <label for="password" class="labelcoi">Password</label><br>
                <input type="password" class="inputform" name="password" id="" placeholder="Your Password"><br><br><br>
                <input type="checkbox" name="checkboxcoi" class="checkcoi">
                <label for="checkboxcoi" class="checklabel">Remember Me</label>
                <br><br><br>
                <button type="submit" class="submitcoi">Login</button>
            </form>
            <p class="donthave">Don't have an account? <a href="{{route('register')}}">Register</a></p>
            </center>
            
        </div>
        <div class="kanan">
            <p class="join">Join Our<br>Community</p>
            <p class="youcan">You can access and read all the books here, it's all free.</p>
        </div>
    </div>
</body>
</html>
