<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/game/main.css') }}">

    {{-- REMIXICON --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.7.0/remixicon.css">

    {{-- swiper --}}
    <link rel="stylesheet" href="{{ asset('css/game/swiper-bundle.min.css') }}">
</head>
<body>

    {{-- header --}}
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{ route('index') }}" class="nav__logo">
                <img src="{{ asset('img/logo/Logo WEB Pameran Game-01.png') }}" alt="" class="nav__logo-img">
                Rpl Exhibition
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    {{-- <li class="nav__item">
                        <a href="#home" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li> --}}
                    <li class="nav__item">
                        <a href="#new" class="nav__link">Games</a>
                    </li>
                    <li class="nav__item">
                        <a href="#trick" class="nav__link">Team</a>
                    </li>
                    @auth
                        <span class="nav__link">Halo, {{ Auth::user()->name }}</span>
                    @endauth
                    @guest
                    <a href="" class="button button--ghost">Login</a>
                    @endguest
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>

                <img src="{{ asset('img/background/console2.png') }}" alt="" class="nav__img">
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-layout-grid-fill"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home container" id="home">
            <div class="home__content grid">
                <div class="home__group">
                    <img src="{{ asset('storage/'.$game->logo_icon) }}" alt="" class="home__img">
                    <div class="home__indicator"></div>

                    <div class="home__details-img">
                        <h4 class="home__details-title">{{ $game->title }}</h4>
                        <span class="home__details-subtitle">{{ $game->team->nama_team }}</span>
                    </div>
                </div>

                <div class="home__data">
                    <h3 class="home__subtitle">{{ $game->team->nama_team }}</h3>
                    <h1 class="home__title">{{ $game->title }}</h1>
                    <p class="home__description">{{ $game->desc }}</p>

                    <div class="home__buttons">
                        <a href="" class="button">Download Now</a>
                        <form action="{{ route('like', ['id' => $game->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="button button--link button--flex">
                        @auth
                            {{ Auth::user()->hasLiked($game) ? 'Dislike' : 'Like' }}
                        @else
                            Like
                        @endauth
                    </button>
                </form>

                    </div>
                </div>
            </div>
        </section>

        <section class="section new" id="new">
            <h2 class="section__title">Games</h2>

            <div class="new__container container">
                <!-- Swiper -->
                <div class="swiper new-Swiper {{ $game->orientation === "Potrait" ? 'potrait' : '' }}">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <video src="{{ asset('storage/'.$game->video_demo) }}" autoplay controls width="100%" height="auto"></video>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/'.$game->ss1) }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/'.$game->ss2) }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/'.$game->ss3) }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/'.$game->ss4) }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/'.$game->ss5) }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>
            </div>
        </section>

        <section class="section trick" id="trick">
            <h2 class="section__title">Team</h2>

            <div class="swiper team-Swiper">
                <div class="swiper-wrapper">
                    <div class="container games swiper-slide">
                        <div class="cardBx row justify-content-center col-xl-12 col-12 col-md-12 col-sm-12 mt-5 gap-2 mx-auto">
                            <div class="row justify-content-center col-xl-3 col-12 col-sm-6 col-md-6">
                                <div class="card" >
                                    <img src="{{ asset('img/siswa/rama.jpg') }}" style="padding: 1rem; border-radius: 2rem" alt="">
                                    <div class="content">
                                        <h4>Brahmana Nudzuli Ramadhani</h4>
                                        <div class="info" style="margin-bottom: 20px;">
                                            <p>Kelas <br> <span>XII RPL 1</span></p>
                                            <p>Tugas <br> <span>Programmer</span></p>
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
                    <div class="container games swiper-slide">
                        <div class="cardBx row justify-content-center col-xl-12 col-12 col-md-12 col-sm-12 mt-5 gap-2 mx-auto">
                            <div class="row justify-content-center col-xl-3 col-12 col-sm-6 col-md-6">
                                <div class="card" >
                                    <img src="{{ asset('img/siswa/rama.jpg') }}" style="padding: 1rem; border-radius: 2rem" alt="">
                                    <div class="content">
                                        <h4>Brahmana Nudzuli Ramadhani</h4>
                                        <div class="info" style="margin-bottom: 20px;">
                                            <p>Kelas <br> <span>XII RPL 1</span></p>
                                            <p>Tugas <br> <span>Programmer</span></p>
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
                    <div class="container games swiper-slide">
                        <div class="cardBx row justify-content-center col-xl-12 col-12 col-md-12 col-sm-12 mt-5 gap-2 mx-auto">
                            <div class="row justify-content-center col-xl-3 col-12 col-sm-6 col-md-6">
                                <div class="card" >
                                    <img src="{{ asset('img/siswa/rama.jpg') }}" style="padding: 1rem; border-radius: 2rem" alt="">
                                    <div class="content">
                                        <h4>Brahmana Nudzuli Ramadhani</h4>
                                        <div class="info" style="margin-bottom: 20px;">
                                            <p>Kelas <br> <span>XII RPL 1</span></p>
                                            <p>Tugas <br> <span>Programmer</span></p>
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
                    <div class="container games swiper-slide">
                        <div class="cardBx row justify-content-center col-xl-12 col-12 col-md-12 col-sm-12 mt-5 gap-2 mx-auto">
                            <div class="row justify-content-center col-xl-3 col-12 col-sm-6 col-md-6">
                                <div class="card" >
                                    <img src="{{ asset('img/siswa/rama.jpg') }}" style="padding: 1rem; border-radius: 2rem" alt="">
                                    <div class="content">
                                        <h4>Brahmana Nudzuli Ramadhani</h4>
                                        <div class="info" style="margin-bottom: 20px;">
                                            <p>Kelas <br> <span>XII RPL 1</span></p>
                                            <p>Tugas <br> <span>Programmer</span></p>
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
                    <div class="container games swiper-slide">
                        <div class="cardBx row justify-content-center col-xl-12 col-12 col-md-12 col-sm-12 mt-5 gap-2 mx-auto">
                            <div class="row justify-content-center col-xl-3 col-12 col-sm-6 col-md-6">
                                <div class="card" >
                                    <img src="{{ asset('img/siswa/rama.jpg') }}" style="padding: 1rem; border-radius: 2rem" alt="">
                                    <div class="content">
                                        <h4>Brahmana Nudzuli Ramadhani</h4>
                                        <div class="info" style="margin-bottom: 20px;">
                                            <p>Kelas <br> <span>XII RPL 1</span></p>
                                            <p>Tugas <br> <span>Programmer</span></p>
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
                </div>
            </div>
        </section>
    </main>

    {{-- swiper --}}
    <script src="{{ asset('javascript/game/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('javascript/game/main.js') }}"></script>
</body>
</html>
