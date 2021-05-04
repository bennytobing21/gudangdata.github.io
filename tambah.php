<?php

session_start();
include 'check.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<meta http-equiv-"X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid"> </div>
        <a class="navbar-brand" href="#">BENNY CHRISTO LUMBAN TOBING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" > </div>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link"></a>
            </li>
			<li class="nav-item">
                    <a class="nav-link" href="index.php">exit</a>
			</li>
			</ul>
    </nav>

	<div class="container">
		<h1>Tambah Data</h1>
		<div class="col-md-6">
			<form action="prosestambah.php" method="post">
				<label for="no_barang">NO BARANG</label>
				<input type="number" class="form-control" name="no_barang">
				<label for="nama_barang">NAMA BARANG</label>
				<input type="text" class="form-control" name="nama_barang">
				<label for="merk_dagang">MERK DAGANG</label>
				<input type="text" class="form-control" name="merk_dagang">
                <label for="harga_barang">HARGA BARANG</label>
				<input type="number" class="form-control" name="harga_barang">
				<label for="jumlah_persediaan">JUMLAH BARANG</label>
				<input type="number" class="form-control" name="jumlah_persediaan">
				<label for="tanggal_kadaluarsa">TANGGAL KADALUARSA</label>
				<input type="text" class="form-control" name="tanggal_kadaluarsa">
				<button class="btn btn-primary mt-1" type="submit" name="button">Simpan Data</button>
			</form>
		</div>
	</div>
</body>
</html>