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

$query = "insert into harga_barang values (
		".$_POST["kode"].",
		'".$_POST["namaBarang"]."',
		".$_POST["harga"].")";
		
//echo "<br><br>" . $query;


if(isset($_POST['submit'])){
	if(empty($_POST['kode'])) {
		$kode = 'KODE tidak boleh kosong';
	} else if(!is_numeric($_POST['kode'])) {
		$kode = 'KODE harus angka';
	} else if(strlen($_POST['kode']) != 12) {
		$kode = 'KODE harus berjumlah 12 angka';
	} else if($koneksi->query($query) == true){
		echo "<br><br>" . $_POST["namaBarang"] . " Sudah Tersimpan. Data bisa dilihat ".
		'<a href="main.php">disini</a>';
	} else {
		echo "error : " . $query . " -> " . $koneksi->error;
	}
	echo $kode;
}
//if ($koneksi->query($query) == true){
	//echo "<br><br>" . $_POST["namaBarang"] . " Sudah Tersimpan. Data bisa dilihat ".
	//'<a href="main.php">disini</a>';
//}else{
	//echo "error : " . $query . " -> " . $koneksi->error;
//}
$koneksi->close();
?>

<form action="tambah.php" method="">
	<input type="submit" value="Kembali">
</form>