<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('home')}}">SPK ITTP</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                {{-- <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li> --}}
                {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
                {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> --}}
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                @guest

                    <!-- Mobile Button -->
                    <form class="form-inline d-sm-block d-md-none">
                        <button class="getstarted scrollto rounded-pill btn btn-primary" type="button"
                            style="background-color: #fff; border-color: #47b2e4; color: #47b2e4;"
                            onmouseover="this.style.backgroundColor='#47b2e4'; this.style.color='#fff';"
                            onmouseout="this.style.backgroundColor='#fff'; this.style.color='#47b2e4';"
                            onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                            Masuk
                        </button>
                    </form>

                    {{-- <li><a class="getstarted scrollto" href="{{ url('login') }}">Masuk</a></li> --}}
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="getstarted scrollto rounded-pill btn btn-primary" type="button"
                            style="background-color: #fff; border-color: #47b2e4; color: #47b2e4;"
                            onmouseover="this.style.backgroundColor='#47b2e4'; this.style.color='#fff';"
                            onmouseout="this.style.backgroundColor='#fff'; this.style.color='#47b2e4';"
                            onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                            Masuk
                        </button>
                    </form>


                @endguest

                @auth
                    <!-- Mobile Button -->
                    <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="getstarted scrollto rounded-pill btn btn-primary" type="submit"
                        style="background-color: #fff; border-color: #47b2e4; color: #47b2e4;"
                        onmouseover="this.style.backgroundColor='#47b2e4'; this.style.color='#fff';"
                        onmouseout="this.style.backgroundColor='#fff'; this.style.color='#47b2e4';">
                            Keluar
                        </button>
                    </form>

                    <!-- Desktop Button -->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="getstarted scrollto rounded-pill btn btn-primary" type="submit"
                            style="background-color: #fff; border-color: #47b2e4; color: #47b2e4;"
                            onmouseover="this.style.backgroundColor='#47b2e4'; this.style.color='#fff';"
                            onmouseout="this.style.backgroundColor='#fff'; this.style.color='#47b2e4';">
                            Keluar
                        </button>
                    </form>


                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
