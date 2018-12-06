<?php
	/**
	*
	*/
	class RegisterAdminController
	{

		public function register(){
			$error='';
			require_once('views/pages/admin/registerAdmin.php');
		}

		public function hargaPasar(){
			require_once('views/pages/admin/hargaPasar.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
		
		public function createUser(){
			$User = RegisterAdmin::createUser($_POST["nama"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["no_telepon"],$_POST["alamat"],$_POST["kecamatan"],$_POST["kota"]);
			echo "<script type='text/javascript'>alert('Petani Berhasil Ditambahkan');</script>";
		header("location:index.php?controller=registerAdmin&action=tampilDataPetani");
	}

		public function tampilDataPetani(){

		if (isset($_SESSION['login_user'])) {
			$posts=RegisterAdmin::tampilData();
			require_once("views/pages/admin/dataPetani.php");
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
	}

	public function detailPetani(){
		$posts=RegisterAdmin::tampilPetani($_GET['id_user']);
			require_once("views/pages/admin/saldoPetani.php");
		}
	

	public function tampilDataUser(){

		if (isset($_SESSION['login_user'])) {
			$posts=RegisterAdmin::tampilUser();
			require_once("views/pages/penjual/detailAkun.php");
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
	}

		public function tampilDataPembeli(){

		if (isset($_SESSION['login_user'])) {
			$posts=RegisterAdmin::tampilUser();
			require_once("views/pages/pembeli/akunPembeli.php");
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
	}

		

	public function tampilHargaP(){
		if (isset($_SESSION['login_user'])) {
			$posts=RegisterAdmin::tampilHargaPasar();
			require_once("views/pages/admin/hargaPasar.php");
		}

		else{
			header('location:index.php?controller=login&action=login');
		}

	}

	public function tampilProduk(){
		if (isset($_SESSION['login_user'])) {
			$posts=RegisterAdmin::showProduk();
			require_once('views/pages/admin/dataProduk.php');
		}
		else{
			header('location:index.php?controller=login&action=login');
		}
	}

	public function ubahDataUser(){
		$posts=RegisterAdmin::updateProfil($_POST["nama"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["no_telepon"],$_POST["alamat"],$_POST["kecamatan"],$_POST["kota"]);
		header("location:index.php?controller=registerAdmin&action=tampilDataUser");
	}

	public function ubahDataPembeli(){
		$posts=RegisterAdmin::updateProfil($_POST["nama"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["no_telepon"],$_POST["alamat"],$_POST["kecamatan"],$_POST["kota"]);
		header("location:index.php?controller=registerAdmin&action=tampilDataPembeli");
	}

	public function masukanHargaPasar(){
		$harga=RegisterAdmin::insertHargaPasar($_POST['h_pemerintah'],$_POST['h_beli'],$_POST['h_jual'],$_POST['jenis']);
		header("location:index.php?controller=registerAdmin&action=tampilHargaP");
	}

	public function inputKomen(){
		$komen=RegisterAdmin::Komen($_GET['id_produk'],$_SESSION['id_user'],$_POST['diskusi']);
	}

	public function inputNotif(){
		$posts=RegisterAdmin::tampilPetani($_GET['id_user']);
			require_once("views/pages/admin/notif.php");
	}

	public function notifikasi(){
		$posts = RegisterAdmin::notifikasi($_GET['id_user'],$_POST['subject'],$_POST['notifikasi']);
		header("location:index.php?controller=registerAdmin&action=tampilDataPetani");
	}

	public function saldoPetani(){
		$posts = RegisterAdmin::saldoPetani($_GET['id_user'],$_POST['saldo']);
		header("location:index.php?controller=registerAdmin&action=tampilDataPetani");
	}

	public function deleteHarga(){
		$posts = RegisterAdmin::deleteDataHarga($_GET['id_harga']);
		header("location:index.php?controller=registerAdmin&action=tampilHargaP");
	}

	public function aprovProduk(){
		$post = RegisterAdmin::aprovProduk($_GET['id_produk']);
		header("location:index.php?controller=registerAdmin&action=tampilProduk");
	}

}
?>
