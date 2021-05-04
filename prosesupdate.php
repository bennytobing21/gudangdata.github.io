<?php
include 'koneksi.php';

$nobaranglama=$_GET['no_barang'];
$nobarang=$_POST['no_barang'];
$namabarang=$_POST['nama_barang'];
$merkdagang=$_POST['merk_dagang'];
$hargabarang=$_POST['harga_barang'];
$jumlahbarang=$_POST['jumlah_persediaan'];
$tanggalkadaluarsa=$_POST['tanggal_kadaluarsa'];

$query=mysqli_query($koneksi, "UPDATE gudang_benny SET no_barang='$nobarang', 
nama_barang='$namabarang', merk_dagang='$merkdagang', 
harga_barang='$hargabarang',jumlah_persediaan='$jumlahbarang' tanggal_kadaluarsa='$tanggalkadaluarsa'
WHERE no_barang='$nobaranglama' ")
or die(mysqli_error($koneksi));

if($query){
	header("Location: index.php");
}else{
	echo "Gagal update data";
}
?>