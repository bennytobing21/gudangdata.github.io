<?php
include 'koneksi.php';
$nobarang=$_GET['no_barang'];

$query=mysqli_query($koneksi, "DELETE FROM gudang WHERE no_barang='$nobarang' ")
or die(mysqli_error($koneksi));

if($query){
	header("Location: index.php");
}else{
	echo "Gagal hapus data";
}
?>