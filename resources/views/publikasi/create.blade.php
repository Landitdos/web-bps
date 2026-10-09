<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Publikasi</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-4">
        <h1>Tambah Publikasi</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/publikasi" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}">
            </div>

            <div class="mb-3">
                <label for="tanggal_rilis" class="form-label">Tanggal Rilis</label>
                <input type="date" class="form-control" id="tanggal_rilis" name="tanggal_rilis" value="{{ old('tanggal_rilis') }}">
            </div>

            <div class="mb-3">
                <label for="sampul" class="form-label">Sampul</label>
                <input type="file" class="form-control" id="sampul" name="sampul" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/publikasi" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>