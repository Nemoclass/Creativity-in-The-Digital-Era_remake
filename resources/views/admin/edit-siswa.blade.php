<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin RPL Exhibition</title>
    <link rel="stylesheet" href="{{ asset('admin/bootstrap.min.css') }}">
  </head>
<body>

    <div class="row mx-auto">
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
                    <div class="mb-3">
                        <label for="sosmed" class="form-label">Sosmed</label>
                        <input type="text" name="sosmed" class="form-control" id="sosmed">
                    </div>
                    <div class="mb-3">
                      <select class="form-select" aria-label="Default select example" name="kelas">
                        <option selected>Kelas</option>
                        <option value="XII RPL 1">XII RPL 1</option>
                        <option value="XII RPL 2">XII RPL 2</option>
                      </select>
                    </div>
                    <button class="btn btn-success d-block ms-auto">Kirim</button>
              </form>
    </div>
<script src="{{ asset('admin/bootstrap.bundle.min.js') }}"></script>
</body>
</html>