<?php 
/**
 * 
 */
class PasarModel
{
private $db;

public function __construct(){
	$this->db = new Database;
}
public function inputHarga($tanggal, $harga_pasar, $jenis){
		$this->db->query("INSERT INTO harga_pasar VALUES(NULL, '".$tanggal."', '".$harga_pasar."', '".$jenis."')");
		$this->db->bind('harga_pasar', $harga_pasar);
		return $this->db->execute();	
	}
public function getHargaPasar(){
		$this->db->query('SELECT * FROM harga_pasar');
		return $this->db->resultSet();
	}

}

 ?>