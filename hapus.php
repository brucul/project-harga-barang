<?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error){
	die("Koneksi gagal : ".$koneksi->connect_error);
}else{
	//echo "Koneksi Sukses !";
}

$query = "delete from harga_barang where kode = ".$_GET["kode"];
//echo "<br><br>" . $query;

if ($koneksi->query($query) == true){
	echo "<br><br>Data dengan kode '" . $_GET["kode"] . "' Sudah Dihapus. Data bisa dilihat ".
	'<a href="main.php">disini</a>';
}else{
	echo "error : " . $query . " -> " . $koneksi->error;
}
$koneksi->close();
?>