<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}" />
</head>
<body>
    <div class="header">
        <div class="header-left">
            <div class="header-logo"><a href="/"><img src="{{ url('frontend/image/logo.png') }}" alt=""></a></div>
            <div class="header-list list-left">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/product">Produk</a></li>
                    <li><a href="/article">Artikel</a></li>
                    <li><a href="/aboutus">About</a></li>
                </ul>
            </div>
        </div>

        @guest
        <div class="header-list list-right">
            <ul>
                <li><a href="/user-register">Register</a></li>
                <!-- <li><i class="fa fa-shopping-cart"></i></li> -->
                <li><a href="/user-login">Log In</a></li>
                <li><a href="/mycart"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
        @endguest

        @auth
        <div class="header-list list-right">
            <ul>
                <li><form action="{{ url('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="Logout">
                  </form></li>
                <li><a href="/my-account">My Account</a></li>
                <!-- <li><i class="fa fa-shopping-cart"></i></li> -->
                {{-- <li><a href="/mycart"><i class="fa fa-shopping-cart"></i></a></li> --}}
            </ul>
        </div>

        {{-- <div class="header-list list-right">
            <form action="{{ url('logout') }}" method="POST">
              @csrf
              <button type="submit">Keluar</button>
            </form>
        </div> --}}
        @endauth
    </div>
</body>
</html>