<?php
class RegisterAdmin
{

	public $nama;
	public $username;
	public $password;
	public $email;
	public $no_telepon;




	function __construct($nama,$username,$password,$email,$no_telepon,$alamat,$kecamatan,$kota)
	{

		$this->nama=$nama;
		$this->username=$username;
		$this->password=$password;
		$this->email=$email;
		$this->no_teleppon=$no_telepon;


	}

	public static function createUser($nama,$username,$password,$email,$no_telepon,$alamat,$kecamatan,$kota){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO users
			VALUES (NULL, '".$nama."', '".$username."', '".$password."', '".$email."', '".'2'."', '".$no_telepon."', '".$alamat."', '".$kecamatan."', '".$kota."');
			");

		return $req;
	}

	public static function tampilData(){
		$db = DB::getInstance();
		$req = $db->query("SELECT * from users where level = 2");

		return $req;
	}
	public static function tampilUser(){
		$db = DB::getInstance();
		$tes = $_SESSION["id_user"];
		$req = $db->query("SELECT * from users where id_user =".$tes);

		return $req;
	}


}

?>
