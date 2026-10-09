<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Daftar Publikasi BPS Provinsi Bengkulu</title>
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container mt-4">
<h1>Daftar Publikasi BPS Provinsi Bengkulu</h1>
   <a href="/publikasi/create" class="btn btn-primary mb-3">Tambah Publikasi</a>
<table class="table table-bordered">
<thead>
<tr>
<th>No</th>
<th>Judul</th>
<th>Tanggal Rilis</th>
<th>Sampul</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
   @foreach ($publikasi as $item)
       <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ $item->judul }}</td>
           <td>{{ $item->tanggal_rilis }}</td>
           <td>
               <img src="/images/{{ $item->sampul }}"
                    alt="{{ $item->judul }}"
                    width="80">
           </td>
           <td>
               <a href="#" class="btn btn-warning btn-sm">Edit</a>
               <a href="#" class="btn btn-danger btn-sm">Hapus</a>
           </td>
       </tr>
   @endforeach
</tbody>
</table>
</div>
</body>
</html>