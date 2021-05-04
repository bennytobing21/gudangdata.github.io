<?php
include 'koneksi.php';

$nobarang=$_POST['no_barang'];
$namabarang=$_POST['nama_barang'];
$merkdagang=$_POST['merk_dagang'];
$hargabarang=$_POST['harga_barang'];
$jumlahbarang=$_POST['jumlah_persediaan'];
$tanggalkadaluarsa=$_POST['tanggal_kadaluarsa'];

$query=mysqli_query($koneksi, "INSERT INTO gudang(no_barang, nama_barang, merk_dagang, harga_barang, 
jumlah_persediaan, tanggal_kadaluarsa) 
VALUES ('$nobarang', '$namabarang', '$merkdagang', '$hargabarang', '$jumlahbarang', '$tanggalkadaluarsa')")
or die(mysqli_error($koneksi));

if($query){
	header("Location: tambah.php");
}else{
	echo "Gagal input data";
}

?>