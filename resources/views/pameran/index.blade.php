<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creativity in The Digital Era</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/index/main.css') }}">

    {{-- REMIXICON --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.7.0/remixicon.css">
</head>
<body>

    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Pameran Game</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#news" class="nav__link">News</a>
                    </li>
                    <li class="nav__item">
                        <a href="#aboutus" class="nav__link">About us</a>
                    </li>
                    <li class="nav__item">
                        <a href="#favorites" class="nav__link">Favorites</a>
                    </li>
                    <li class="nav__item">
                        <a href="#location" class="nav__link">Location</a>
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
                        Select The Best <br> Quality Breads
                    </h1>

                    <a href="#" class="button">Select Breads</a>

                    <img src="{{ asset('img/background/console.png') }}" alt="image" class="home__console">
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
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="" target="_blank">
                            <i class="ri-instagram-line"></i>
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

                <a href="#" class="new__button button">See More Breads</a>
            </div>
        </section>
    </main>

    <footer class="footer">

    </footer>

    <script src="{{ asset('javascript/index/main.js') }}"></script>
</body>
</html>
