
    <div class="header">
        <div class="header-logo"><a href="/"><img src="{{ url('frontend/image/logo.png') }}" alt=""></a></div>
        <div class="header-list list-left">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/product">Produk</a></li>
                <li><a href="/article">Artikel</a></li>
                <li><a href="/aboutus">About</a></li>
            </ul>
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
            <form action="{{ url('logout') }}" method="POST">
              @csrf
              <button type="submit">Keluar</button>
            </form>
        </div>
        @endauth
    </div>