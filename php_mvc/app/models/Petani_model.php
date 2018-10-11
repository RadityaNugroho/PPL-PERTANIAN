<?php 

class Petani_model{
private $table = 'data_user';
private $db;

public function __construct(){
	$this->db = new Database;
}

	public function getAllpetani(){
		$this->db->query('SELECT * FROM data_user where role = 2');
		return $this->db->resultSet();
	}

		public function getPetaniById($id_user){
		$this->db->query('SELECT * FROM data_user WHERE id_user=:id_user');
		$this->db->bind('id_user', $id_user);
		return $this->db->single();
		}

		public function inputPetani($nama, $email, $alamat, $kecamatan, $kota, $no_hp, $no_ktp, $username, $password){
		$this->db->query("INSERT INTO data_user VALUES(NULL, '".$nama."', '".$email."', '".$alamat."'
		, '".$kecamatan."', '".$kota."', '".$no_hp."', '".$no_ktp."', '".$username."', '".$password."'
		, 2)");
		return $this->db->execute();
		
	}

}

 ?>