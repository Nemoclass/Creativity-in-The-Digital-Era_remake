<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin RPL Exhibition</title>
    <link rel="stylesheet" href="{{ asset('admin/bootstrap.min.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/logo/Logo WEB Pameran Game-01.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      RPL Game Exhibition
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container pt-3">
        <button class="btn btn-primary" onclick="tampilFormGame()"><a class="nav-link disabled" href="">Tambah game +</a></button>
        <button class="btn btn-info" onclick="tampilFormSiswa()"><a class="nav-link disabled" href="">Tambah siswa +</a></button>
        <button class="btn btn-warning" onclick="tampilFormTeam()"><a class="nav-link disabled" href="">Tambah team +</a></button>
        <div class="row mt-3 d-none" id="form-game">
            <h3 class="border-bottom pb-2">Tambah Data Game</h3>
            <div class="row mx-auto">
                <form action="{{ route('admin-store-game') }}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="mb-3">
                        <label for="judulGame" class="form-label">Judul Game</label>
                        <input type="text" name="title" class="form-control" id="judulGame" placeholder="Judul Game">
                    </div>
                    <div class="row col-lg-12 mx-auto">
                        <div class="col-lg-4">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="iconGame">Logo Icon</label>
                                <input type="file" name="logo_icon" class="form-control" id="iconGame">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="videoDemo">Video Demo</label>
                                <input type="file" name="video_demo" class="form-control" id="videoDemo">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="LogoText">Logo Text</label>
                                <input type="file" name="logo_text" class="form-control" id="LogoText">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="descGame" class="form-label">Deskripsi Game</label>
                        <textarea class="form-control" name="desc" id="" cols="30" rows="10" placeholder="Deskripsi Game"></textarea>
                    </div>
                    <div class="row col-lg-12 mx-auto">
                        <div class="col-lg-3">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="ss1">Screenshot 1</label>
                                <input type="file" name="ss1" class="form-control" id="ss1">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="ss2">Screenshot 2</label>
                                <input type="file" name="ss2" class="form-control" id="ss2">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="ss3">Screenshot 3</label>
                                <input type="file" name="ss3" class="form-control" id="ss3">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="ss4">Screenshot 4</label>
                                <input type="file" name="ss4" class="form-control" id="ss4">
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-12 mx-auto">
                      <div class="col-lg-4">
                          <div class="input-group mb-3">
                                <label class="input-group-text" for="ss5">Screenshot 5</label>
                                <input type="file" name="ss5" class="form-control" id="ss5">
                            </div>
                      </div>
                      <div class="col-lg-8">
                        <select class="form-select" aria-label="Default select example" name="team_id">
                        <option selected>Pilih Tim</option>
                        @foreach ($team as $t)
                          <option value="{{ $t->id }}">{{ $t->nama_team }}</option>
                        @endforeach
                  </select>
                      </div>
                    </div>
                    <button class="btn btn-success d-block ms-auto">Kirim</button>
                </form>
            </div>
        </div>
        <div class="row mt-3 d-none" id="form-siswa">
          <h3 class="border-bottom pb-2">Tambah Data Siswa</h3>
          <div class="row col-lg-12 mx-auto">
            <div class="col-lg-4" id="previewImage">
              
            </div>
            <div class="col-lg-8">
              <form action="{{ route('admin-store-siswa') }}" method="post" enctype="multipart/form-data">
                @csrf
                   <select class="form-select" aria-label="Default select example" name="team_id">
                        <option selected>Pilih Tim</option>
                      @foreach ($team as $t)
                        <option value="{{ $t->id }}">{{ $t->nama_team }}</option>
                      @endforeach
                  </select>
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                        <input type="text" name="nama_siswa" class="form-control" id="nama_siswa">
                    </div>
                    <div class="mb-3">
                        <label for="foto_siswa" class="form-label">Foto Siswa</label>
                        <input type="file" name="foto_siswa" class="form-control" id="foto_siswa">
                    </div>
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Tugas dalam tim</label>
                        <input type="text" name="tugas" class="form-control" id="tugas">
                    </div>
                    <button class="btn btn-success d-block ms-auto">Kirim</button>
              </form>
            </div>
          </div>
        </div>
        <div class="row mt-3 d-none" id="form-team">
          <h3 class="border-bottom pb-2">Tambah Data Team</h3>
          <div class="row col-lg-12 mx-auto">
              <form action="{{ route('admin-store-team') }}" method="post">
                @csrf
                  <div class="mb-3">
                        <label for="team" class="form-label">Nama Team</label>
                        <input type="text" name="nama_team" class="form-control" id="team">
                    </div>
                    <button class="btn btn-success d-block ms-auto">Kirim</button>
              </form>
          </div>
        </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
    <script src="{{ asset('admin/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/jquery3.4.6.js') }}"></script>
    <script>
      const game = document.getElementById("form-game")
      const siswa = document.getElementById("form-siswa")
      const team = document.getElementById("form-team")

      function tampilFormGame(){
        game.classList.remove("d-none")
        siswa.classList.add("d-none")
        team.classList.add("d-none")
      }
      function tampilFormSiswa(){
        siswa.classList.remove("d-none")
        game.classList.add("d-none")
        team.classList.add("d-none")
      }
      function tampilFormTeam(){
        team.classList.remove("d-none")
        game.classList.add("d-none")
        siswa.classList.add("d-none")
      }
      $(document).ready(function(){
            $('#foto_siswa').on('change', function(){
                var files = $(this)[0].files;

                if(files.length > 0) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#previewImage').html('<img src="' +e.target.result+'" alt="Preview" style="width: 200px">');
                    };

                    reader.readAsDataURL(files[0]);
                } else {
                    $('#previewImage').html('');
                }
            });
        });
    </script>
  </body>
</html>

