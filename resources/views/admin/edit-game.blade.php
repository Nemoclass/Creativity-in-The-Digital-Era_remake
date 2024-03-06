<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin RPL Exhibition</title>
    <link rel="stylesheet" href="{{ asset('admin/bootstrap.min.css') }}">
  </head>
<body>

    <div class="row mx-auto">
        <form action="{{ route('admin-update-game') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judulGame" class="form-label">Judul Game</label>
            <input type="text" name="title" class="form-control" id="judulGame" placeholder="Judul Game" value="{{ $game->title }}">
        </div>
        <div class="row col-lg-12 mx-auto">
            <div class="col-lg-4">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="iconGame">Logo Icon</label>
                    <input type="file" name="logo_icon" class="form-control" id="iconGame">
                </div>
                <p>Logo icon :</p>
                <img src="{{ asset('storage/'.$game->logo_icon) }}" alt="" width="200px">
            </div>
            <div class="col-lg-4">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="videoDemo">Video Demo</label>
                    <input type="file" name="video_demo" class="form-control" id="videoDemo">
                </div>
                <p>Video demo :</p>
                <video src="{{ asset('storage/'.$game->video_demo) }}" width="400px"></video>
            </div>
            <div class="col-lg-4">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="LogoText">Logo Text</label>
                    <input type="file" name="logo_text" class="form-control" id="LogoText">
                </div>
                <p>Logo text :</p>
                <img src="{{ asset('storage/'.$game->logo_text) }}" alt="" width="200px">
            </div>
        </div>
        <div class="mb-3">
            <label for="descGame" class="form-label">Deskripsi Game</label>
            <textarea class="form-control" name="desc" id="" cols="30" rows="10" placeholder="Deskripsi Game">{{ $game->desc }}</textarea>
        </div>
        <div class="row col-lg-12 mx-auto">
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="ss1">Screenshot 1</label>
                    <input type="file" name="ss1" class="form-control" id="ss1">
                </div>
                <p>Screenshoot 1</p>
                <img src="{{ asset('storage/'.$game->ss1) }}" alt="" width="200px">
            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="ss2">Screenshot 2</label>
                    <input type="file" name="ss2" class="form-control" id="ss2">
                </div>
                <p>Screenshoot 2</p>
                <img src="{{ asset('storage/'.$game->ss2) }}" alt="" width="200px">
            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="ss3">Screenshot 3</label>
                    <input type="file" name="ss3" class="form-control" id="ss3">
                </div>
                <p>Screenshoot 3</p>
                <img src="{{ asset('storage/'.$game->ss3) }}" alt="" width="200px">
            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="ss4">Screenshot 4</label>
                    <input type="file" name="ss4" class="form-control" id="ss4">
                </div>
                <p>Screenshoot 4</p>
                <img src="{{ asset('storage/'.$game->ss4) }}" alt="" width="200px">
            </div>
        </div>
        <div class="row col-lg-12 mx-auto mt-3">
            <div class="col-lg-4">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="ss5">Screenshot 5</label>
                    <input type="file" name="ss5" class="form-control" id="ss5">
                </div>
                <p>Screenshoot 5</p>
                <img src="{{ asset('storage/'.$game->ss5) }}" alt="" width="200px">
            </div>
            <div class="col-lg-8">
            <select class="form-select" aria-label="Default select example" name="team_id">
                        @foreach ($team as $t)
                          <option value="{{ $t->id }}" {{ $game->team === 'selected' }}>{{ $t->nama_team }}</option>
                        @endforeach
                  </select>
            </div>
        </div>
        <button class="btn btn-success d-block ms-auto">Kirim</button>
    </form>
</div>
<script src="{{ asset('admin/bootstrap.bundle.min.js') }}"></script>
</body>
</html>