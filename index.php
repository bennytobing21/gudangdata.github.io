<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset ="UTF-8">
	<meta http-equiv-"X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
    GUDANG BENNY
    </title>
	<link rel="stylesheet" href="bootstrap.min.css">
		
</head>
<body>

<?php
    include 'koneksi.php';
    
    $data = mysqli_query($koneksi, "SELECT * FROM gudang") or die(mysqli_error($koneksi));
    ?> 


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
			<?php if (empty($_SESSION['email'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah.php">Tambah Data</a>
                    </li>
                <?php } ?>
				<a class="nav-link" href="logout.php">logout</a>
		  </ul>
    </nav>

    <div ALIGN = "CENTER">
		<p><b> <font face=multicolore color=red position=center>
		<div class="box">
	<h1>GUDANG</h1>
	<table class="table table-dark">
		<thead >
			<th scope="col">NO BARANG</th>
			<th scope="col">NAMA BARANG</th>
			<th scope="col">MERK DAGANG</th>
            <th scope="col">HARGA BARANG</th>
            <th scope="col">JUMLAH PERSEDIAAN</th >
            <th scope="col">TANGGAL KADALUARSA</th>
		</thead>
		<tbody>
		<?php
		include 'koneksi.php';
		$data=mysqli_query($koneksi, "SELECT * FROM gudang") or die (mysqli_error($koneksi));
		foreach($data as $baris){ ?>
		<tr class="bg-primary">
			<td><?php echo $baris['no_barang'] ?></td>
			<td><?php echo $baris['nama_barang'] ?></td>
			<td><?php echo $baris['merk_dagang'] ?></td>
            <td><?php echo $baris['harga_barang'] ?></td>
			<td><?php echo $baris['jumlah_persediaan'] ?></td>
			<td><?php echo $baris['tanggal_kadaluarsa'] ?></td>
			
			<td>

			<?php if (empty($_SESSION['email'])) { ?>
				
				<a href="check.php?no_barang=<?php echo $baris['no_barang'] ?>" class="btn btn-success">Update</a>
				<a href="check.php?no_barang=<?php echo $baris['no_barang'] ?>" class="btn btn-danger">Delete</a>

			<?php } else { ?>
			
				<a href="update.php?no_barang=<?php echo $baris['no_barang'] ?>" class="btn btn-success">Update</a>
				<a href="delete.php?no_barang=<?php echo $baris['no_barang'] ?>" class="btn btn-danger">Delete</a>
			
			<?php } ?>
			
			<?php } ?>
			
			</td>
		</tbody>
		
</body>
</html>