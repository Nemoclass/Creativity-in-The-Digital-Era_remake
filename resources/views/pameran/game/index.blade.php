<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/game/main.css') }}">

    {{-- Materialize --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    {{-- REMIXICON --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.7.0/remixicon.css">

</head>
<body>

    {{-- <header>
        <a href="" class="logo">Rpl Exhibition</a>
        <ul class="nav">
            <li><a href="#"><i class="ri-home-3-line"></i></a></li>
            <li><a href="#">Adults</a></li>
            <li><a href="#">Kids</a></li>
            <li><a href="#">Trend</a></li>
            <li><a href="#">My List</a></li>
        </ul>
        <div class="search">
            <input type="search" placeholder="Search">
            <i class="ri-search-line"></i>
        </div>
    </header> --}}
    <div class="banner" style="background: url({{ asset('storage/'.$game->ss1) }}) no-repeat;">
        <div class="content active">
            <img src="{{ asset('storage/'.$game->logo_text) }}" alt="image" class="movie-title">
            <h4>
                <span>Petualangan</span>
                <span>Advanture</span><span>Kidz</span>
            </h4>
            <p>
                {{ $game->desc }}
            </p>
            <div class="button">
                <div class="download">
                    <a href=""><i class="ri-google-play-line"></i>Download Games</a>
                </div>
                <div class="like">
                    <a href=""><i class="ri-heart-line"></i> | <i class="ri-heart-fill"></i> Like</a>
                    <a href="{{ route('index') }}">Kembali</a>
                </div>
            </div>
        </div>


        <div class="carousel-box">
            <div class="carousel">
                <div class="carousel-item">
                    <img src="{{ asset('storage/'.$game->ss1) }}" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/'.$game->ss2) }}" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/'.$game->ss3) }}" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/'.$game->ss4) }}" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/'.$game->ss5) }}" alt="image">
                </div>
            </div>
        </div>
    </div>

        {{-- <a href="#" class="play" onclick="toggleVideo()"><i class="ri-play-circle-line"></i>Play Tutorial</a> --}}
        <span class="play" onclick="toggleVideo()"><i class="ri-play-circle-line"></i>Play Tutorial</span>
        {{-- <ul class="sci">
            <li><a href="#"><i class="ri-instagram-line"></i></a></li>
            <li><a href="#"><i class="ri-tiktok-line"></i></a></li>
            <li><a href="#"><i class="ri-threads-line"></i></a></li>
        </ul> --}}
    <div class="trailer">
        <video src="{{ asset('storage/'.$game->video_demo) }}" controls="true"></video>
        <img class="close" src="{{ asset('img/content/close-circle-line.png') }}" onclick="toggleVideo()" alt="">
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('javascript/game/main.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>
</body>
</html>
