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

	public function tampilDataUser(){

		if (isset($_SESSION['login_user'])) {
			$posts=RegisterAdmin::tampilUser();
			require_once("views/pages/penjual/detailAkun.php");
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
	}



}
?>
