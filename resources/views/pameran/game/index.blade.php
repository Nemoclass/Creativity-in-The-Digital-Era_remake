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

    <div class="banner">
        <div class="content active">
            <img src="{{ asset('img/game/icon/dinorun.png') }}" alt="image" class="movie-title">
            <h4>
                <span>Petualangan</span>
                <span>Advanture</span><span>Kidz</span>
            </h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nobis laborum voluptatem, nisi excepturi ea, suscipit repellat incidunt consectetur quo qui tempore inventore minus rem atque velit ducimus earum ipsam, eius consequuntur? Libero consequatur voluptas, iusto deserunt aut id tempora architecto itaque quam nesciunt exercitationem. Dolor sunt corrupti quisquam velit.
            </p>
            <div class="button">
                <a href=""><i class="ri-google-play-line"></i>Download Games</a>
                <a href=""><i class="ri-heart-line"></i> | <i class="ri-heart-fill"></i> Like</a>
                <a href="{{ route('index') }}">Kembali</a>
            </div>
        </div>
        <div class="carousel-box">
            <div class="carousel">
                <div class="carousel-item">
                    <img src="{{ asset('img/game/ingame/game1.jpg') }}" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/game/ingame/game1.jpg') }}" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/game/ingame/game1.jpg') }}" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/game/ingame/game1.jpg') }}" alt="image">
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
    </div>
    <div class="trailer">
        <video src="{{ asset('video/game/dinorun.mp4') }}" controls="true"></video>
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
