<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creativity in Digital Era</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/index/main.css') }}">

    {{-- REMIXICON --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.7.0/remixicon.css">

    {{-- swiper --}}
    <link rel="stylesheet" href="{{ asset('css/index/swiper-bundle.min.css') }}">
</head>
<body>

    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Rpl Exhibition</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#new" class="nav__link">News</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About us</a>
                    </li>
                    <li class="nav__item">
                        <a href="#favorite" class="nav__link">Games</a>
                    </li>
                    <li class="nav__item">
                        <a href="#visit" class="nav__link">Exhibition</a>
                    </li>
                    @auth
                         @if(Auth::user()->role === "admin")
                        <li class="nav__item">
                            <a href="{{ route('admin-index') }}" class="nav__link">Admin Dashboard</a>
                        </li>
                        @endif
                    @endauth

                    <li class="nav__item">
                        @auth
                        <span onclick="showLogout()" class="nav__link nav__login" style="cursor: pointer">Halo, {{ Auth::user()->name }}</span>
                        <ul class="logout dis-none" id="showLogout">
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                        @endauth
                        @guest
                        <a href="{{ route('login') }}" class="nav__link nav__login">Login</a>
                        @endguest
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>

                <img src="{{ asset('img/background/console.png') }}" alt="image" class="nav__img-1">
                <img src="{{ asset('img/background/game-development.png') }}" alt="image" class="nav__img-2">
            </div>

            {{-- Toggle button --}}
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home section" id="home">
            <img src="{{ asset('img/background/background.jpeg') }}" alt="image" class="home__bg">
            <div class="home__shadow"></div>

            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        Creativity in <br> Digital Era
                    </h1>

                    {{-- <a href="#" class="button">Select Games</a> --}}

                    {{-- <img src="{{ asset('img/background/console.png') }}" alt="image" class="home__console"> --}}
                </div>

                <div class="home__image">
                    <img src="{{ asset('img/content/c1.png') }}" alt="image" class="home__img">
                </div>

                <footer class="home__footer">
                    <div class="home__location">
                        <i class="ri-map-pin-line"></i>
                        <span>SMK N 1 Purwokerto</span>
                    </div>

                    <div class="home__social">
                        <a href="" target="_blank">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="" target="_blank">
                            <i class="ri-tiktok-line"></i>
                        </a>
                        <a href="" target="_blank">
                            <i class="ri-threads-line"></i>
                        </a>
                    </div>
                </footer>
            </div>
        </section>

        <section class="new section" id="new">
            <h2 class="section__title">Pameran Game</h2>

            <div class="new__container container grid">
                <div class="new__content grid">
                    <article class="new__card">
                        <div class="new__data">
                            <h2 class="new__title">Latar Belakang</h2>
                            <p class="new__deskription">Pameran game ini memamerkan karya terbaru dari pengembang game terkemuka.</p>
                        </div>

                        <img src="{{ asset('img/content/Latar_Belakang.png') }}" alt="image" class="new__img">
                    </article>
                    <article class="new__card">
                        <div class="new__data">
                            <h2 class="new__title">Deskripsi</h2>
                            <p class="new__deskription">Pameran game ini mempersembahkan game terbaru dan teknologi terkini dalam industri game.</p>
                        </div>

                        <img src="{{ asset('img/content/Description.png') }}" alt="image" class="new__img">
                    </article>
                    <article class="new__card">
                        <div class="new__data">
                            <h2 class="new__title">Tujuan</h2>
                            <p class="new__deskription">Pameran game ini bertujuan untuk menghadirkan inovasi terbaru dalam industri game kepada para pengunjung.</p>
                        </div>

                        <img src="{{ asset('img/content/Tujuan.png') }}" alt="image" class="new__img">
                    </article>
                </div>

                {{-- <a href="#" class="new__button button">See More Breads</a> --}}
            </div>
        </section>

        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">About Us</h2>

                    <p class="about__description">
                        Kami adalah penyelenggara pameran game yang berdedikasi untuk menyatukan komunitas pengembang dan penggemar game melalui platform kami. Kami berusaha untuk mempersembahkan karya-karya terbaru dan inovatif dalam industri hiburan interaktif, menciptakan pengalaman yang menginspirasi dan memperkaya bagi semua yang bergabung dengan kami.
                    </p>

                    {{-- <a href="#" class="button">Know More</a> --}}

                    <img src="{{ asset('img/background/console2.png') }}" alt="image" class="about__poster">
                </div>

                <img src="{{ asset('img/content/gameposter.jpg') }}" alt="image" class="about__img">
            </div>
        </section>

        <section class="favorite section" id="favorite">
            <h2 class="section__title">Favorite Game</h2>

            <div class="favorite__container container grid">
                @foreach ($game as $g)

                <article class="favorite__card">
                    <img src="{{ asset('storage/'.$g->logo_icon) }}" alt="image" class="favorite__img">

                    <div class="favorite__data">
                        <h2 class="favorite__title">{{ $g->title }}</h2>
                        <span class="favorite__subtitle">{{ $g->team->nama_team }}</span>
                        <h3 class="favorite__price">Like {{ $g->likes_count }}</h3>
                    </div>

                    <button class="favorite__button button">
                        <a href="{{ route('game', ['id' => $g->id]) }}" style="color: white"><i class="ri-eye-line"></i></a>
                    </button>
                </article>
                @endforeach
            </div>
        </section>

        <section class="visit section" id="visit">
            <div class="visit__container">
                <img src="{{ asset('img/content/visit.jpeg') }}" alt="image" class="visit__bg">
                <div class="visit__shadow"></div>

                <div class="visit__content container grid">
                    <div class="visit__data">
                        <h2 class="section__title">Participate Exhibition</h2>

                        <p class="visit__description">
                            Find the best games, we look forward to your visit to the RPL GAMES EXHIBITION.
                        </p>

                        {{-- <a href="#" class="button">See Location</a> --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="section siswa" id="siswa">
            <h2 class="section__title">RPL 1</h2>
            <div class="swiper siswa-Swiper">
                <div class="swiper-wrapper">
                    @foreach ($siswa as $s)
                        <div class="container games swiper-slide">
                            <div class="cardBx row justify-content-center col-xl-12 col-12 col-md-12 col-sm-12 mt-5 gap-2 mx-auto">
                                <div class="row justify-content-center col-xl-3 col-12 col-sm-6 col-md-6">
                                    <div class="card" >
                                        <img src="{{ asset('storage/'.$s->foto_siswa) }}" style="padding: 1rem; border-radius: 2rem" alt="">
                                        <div class="content">
                                            <h4>{{ $s->nama_siswa }}</h4>
                                            <div class="info" style="margin-bottom: 20px;">
                                                <p>Kelas <br> <span>{{ $s->kelas }}</span></p>
                                                <p> <br> <span><a href="{{ $s->sosmed }}" target="_blank"><i class="ri-instagram-line"></i></a></span></p>
                                                {{-- <a href="game/DinoRun.html">Lihat</a> --}}
                                            </div>
                                            <div class="progress-line">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <h2 class="section__title">RPL 2</h2>
            <div class="swiper siswa-Swiper">
                <div class="swiper-wrapper">
                    @foreach ($siswa as $s)
                        <div class="container games swiper-slide">
                            <div class="cardBx row justify-content-center col-xl-12 col-12 col-md-12 col-sm-12 mt-5 gap-2 mx-auto">
                                <div class="row justify-content-center col-xl-3 col-12 col-sm-6 col-md-6">
                                    <div class="card" >
                                        <img src="{{ asset('storage/'.$s->foto_siswa) }}" style="padding: 1rem; border-radius: 2rem" alt="">
                                        <div class="content">
                                            <h4>{{ $s->nama_siswa }}</h4>
                                            <div class="info" style="margin-bottom: 20px;">
                                                <p>Kelas <br> <span>{{ $s->kelas }}</span></p>
                                                <p> <br> <span><a href="{{ $s->sosmed }}" target="_blank"><i class="ri-instagram-line"></i></a></span></p>
                                                {{-- <a href="game/DinoRun.html">Lihat</a> --}}
                                            </div>
                                            <div class="progress-line">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">Rpl Exhibition</a>
                <p class="footer__description">
                    We make the best Game <br> in the Digital Era.
                </p>
            </div>

            <div class="footer__content grid">
                <div>
                    <h3 class="footer__title">Development by</h3>

                    <ul class="footer__list">
                        <li>
                            <address class="footer__info">Rizqy Bagus Saputra</address>
                        </li>

                        <li>
                            <address class="footer__info">Vindra Arya Yulian</address>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Contact</h3>

                    <ul class="footer__list">
                        <li>
                            <address class="footer__info">rplexhibition@gmail.com</address>
                        </li>

                        <li>
                            <address class="footer__info" ><a href="" style="color: white">XII RPL 1</a> | <a href="" style="color: white">XII RPL 2</a></address>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Follow </h3>

                    <div class="footer__social">
                        {{-- <a href="https://www.instagram.com/uneso.smecone?igsh=MXE1ZXI3ZzNnYmtiOA==" target="_blank">
                            @uneso
                        </a>
                        <a href="https://www.instagram.com/soneetwo?igsh=MWVseWlldmxtNnVlaQ==" target="_blank">
                            @soneetwo
                        </a> --}}
                        <a href="" target="_blank">
                            <i class="ri-instagram-line"></i>
                        </a>
                        {{-- <a href="" target="_blank">
                            <i class="ri-threads-line"></i>
                        </a>
                        <a href="" target="_blank">
                            <i class="ri-threads-line"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
            <img src="{{ asset('img/background/console2.png') }}" alt="image" class="footer__img-1">
            <img src="{{ asset('img/content/Tujuan.png') }}" alt="image" class="footer__img-2">
        </div>
        <span class="footer__copy">
            &#169; Copyright By Rpl Exhibition 2024
        </span>
    </footer>

    {{-- scroll up --}}
    <a href="#" class="scrollup" id="scroll-up"><i class="ri-arrow-up-line"></i></a>

    {{-- swiper --}}
    <script src="{{ asset('javascript/index/swiper-bundle.min.js') }}"></script>

    {{-- scroll reveall --}}
    <script src="{{ asset('javascript/index/scrollreveal.min.js') }}"></script>

    {{-- script --}}
    <script src="{{ asset('javascript/index/main.js') }}"></script>
    <script>
        function showLogout() {
            const showLogout  = document.getElementById("showLogout");
            showLogout.classList.remove("dis-none");
        }
    </script>
</body>
</html>
