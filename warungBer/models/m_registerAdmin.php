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

	public static function tampilPetani($id_user){
		$db = DB::getInstance();
		$req = $db->query("SELECT nama from users where id_user =".$id_user);

		return $req;
	}


	public static function tampilUser(){
		$db = DB::getInstance();
		$tes = $_SESSION["id_user"];
		$req = $db->query("SELECT * from users where id_user =".$tes);

		return $req;
	}


public static function showProduk(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT *
			FROM produk p join users u
			ON p.id_user=u.id_user");

foreach ($req as $item) {
		$list[]=array(
		'id_produk'=>$item['id_produk'],
		'nama_produk'=>$item['nama_produk'],
		'id_user'=>$item['id_user'],
		'jumlah_stok'=>$item['jumlah_stok'],
		'harga'=>$item['harga'],
		'status'=>$item['status'],
		'foto_produk'=>$item['foto_produk'],
		'deskripsi'=>$item['deskripsi'],
		'penjual'=>$item['nama']

		);
}
if (isset($list)) {
	return $list;
} else {
	return null;
}
}

public function updateProfil($nama,$username,$password,$email,$no_telepon,$alamat,$kecamatan,$kota){
	$db = DB::getInstance();
	$id = $_SESSION["id_user"];
	$req = $db->query("UPDATE users set nama='$nama', username='$username', password='$password', email='$email',
		no_telepon='$no_telepon', alamat='$alamat', kecamatan='$kecamatan', kota='$kota' where id_user=".$id);

	return $req;
	
}


public static function updateDataProduk($id_produk,$nama_produk,$harga,$jumlah_stok,$deskripsi){
		$db = DB::getInstance();
		$req = $db->query("UPDATE produk set nama_produk='$nama_produk',jumlah_stok='$jumlah_stok',harga='$harga'
			,deskripsi='$deskripsi' where id_produk=".$id_produk);

		return $req;
	}

public static function insertHargaPasar($h_pemerintah, $h_beli, $h_jual, $jenis){
		$db = DB::getInstance();
		$req = $db->query("INSERT INTO harga_pasar
			VALUES (NULL,curdate(),'".$h_pemerintah."', '".$h_beli."', '".$h_jual."', '".$jenis."')");

		return $req;
}

public static function tampilHargaPasar(){
	$db = DB::getInstance();
	$req = $db->query("SELECT * from harga_pasar");

	return $req;
}

public function Komen($id_produk,$id_user,$diskusi){
	$db = DB::getInstance();
	$req = $db->query("INSERT into diskusi VALUES(NULL,'".$id_produk."','".$id_user."','".$diskusi."')");

	return $req;
}

public function notifikasi($id_user,$subject,$notifikasi){
	$db = DB::getInstance();
	$req = $db->query("INSERT INTO notifikasi VALUES(NULL,'".$id_user."','".$subject."','".$notifikasi."',curdate())");

	return $req;
}

public function saldoPetani($id_user, $saldo){
	$db = DB::getInstance();
	$req = $db->query("INSERT INTO saldo VALUES(NULL,'".$id_user."',curdate(),'".$saldo."')");

	return $req;
}

public static function deleteDataHarga($id_harga){
		$db = DB::getInstance();
		$req = $db->query("DELETE from harga_pasar where id_harga='$id_harga'");

		return $req;
	}

public function aprovProduk($id_produk){
	$db = DB::getInstance();
	$req = $db->query("UPDATE produk set status='Terverifikasi' where id_produk='$id_produk'");

	return $req;
}

// public function notifProduk(){
// 	$db = DB::getInstance();
// 	$req = $db->query("INSERT INTO notifikasi VALUES(NULL,'".$id_user."','".$subject."','".$notifikasi."',curdate())");

// 	return $req;
// }
}

?>
