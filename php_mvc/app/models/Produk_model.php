<?php 

/**
 * 
 */
class Produk_model
{
	
private $db;	
	
public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllproduk(){
		$this->db->query('SELECT * FROM data_produk');
		return $this->db->resultSet();
	}

	public function pushProduk($nama_produk, $deskripsi, $harga_produk, $stock, $gambar_p){
		$this->db->query("INSERT INTO data_produk VALUES(NULL, 2 ,'".$nama_produk."', '".$deskripsi."', '".$harga_produk."', '".$stock."', '".$gambar_p."')");
		return $this->db->execute();
	}
}

 ?>