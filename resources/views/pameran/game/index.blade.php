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
            <a href="" class="nav__logo">
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

                    <a href="" class="button button--ghost">Login</a>
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
                    <img src="{{ asset('img/game/icon/dinorun.png') }}" alt="" class="home__img">
                    <div class="home__indicator"></div>

                    <div class="home__details-img">
                        <h4 class="home__details-title">Dino Run</h4>
                        <span class="home__details-subtitle">Gedang</span>
                    </div>
                </div>

                <div class="home__data">
                    <h3 class="home__subtitle">Gedang</h3>
                    <h1 class="home__title">DinoRun</h1>
                    <p class="home__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor quis doloremque ad autem, architecto earum aliquid aliquam esse? Quis, quibusdam.</p>

                    <div class="home__buttons">
                        <a href="" class="button">Download Now</a>
                        <a href="" class="button button--link button--flex">
                            like
                            <i class="ri-heart-line"></i>
                            |
                            <i class="ri-heart-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section new" id="new">
            <h2 class="section__title">Games</h2>

            <div class="new__container container">
                <!-- Swiper -->
                <div class="swiper new-Swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <video src="{{ asset('video/game/dinorun.mp4') }}" autoplay controls width="100%" height="auto"></video>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/game/icon/WhatsApp Image 2024-03-01 at 14.07.35.jpeg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/game/icon/WhatsApp Image 2024-03-01 at 14.07.35.jpeg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/game/icon/WhatsApp Image 2024-03-01 at 14.07.35.jpeg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/game/icon/WhatsApp Image 2024-03-01 at 14.07.35.jpeg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/game/icon/WhatsApp Image 2024-03-01 at 14.07.35.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
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
