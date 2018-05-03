<?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error){
	die("Koneksi gagal : ".$koneksi->connect_error);
}else{
	//echo "Koneksi Sukses !";
}

//echo "Kode : " . $_POST["kode"];
//echo "Nama Barang : " . $_POST["namaBarang"];
//echo "Harga : " . $_POST["harga"];

$query = "update harga_barang set nama_barang = '" . $_POST["namaBarang"] . "', harga = " . $_POST["harga"] . " " .
		"where kode = " . $_POST["kode"];
		
//echo "<br><br>" . $query;
if ($koneksi->query($query) == true){
	echo "<br><br>Data " . $_POST["namaBarang"] . " Sudah Diubah. Data bisa dilihat ".
	'<a href="main.php">disini</a>';
}else{
	echo "error : " . $query . " -> " . $koneksi->error;
}
$koneksi->close();
?>