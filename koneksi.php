<?php
class Koneksi{
	private $server = "localhost";
	private $username = "id4928896_cul";
	private $password = "425425af";
	private $db = "id4928896_hrg_brg";
	private $hubungan;
	
	function ambilKoneksi(){
		$hubungan = new mysqli($this->server, $this->username, $this->password, $this->db);
		return $hubungan;
	}
}
?>
