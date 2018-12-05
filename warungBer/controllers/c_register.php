<?php
	/**
	*
	*/
	class RegisterController
	{

		public function register(){
			$error='';
			require_once('views/pages/register.php');
		}

		public function home(){
			require_once('views/pages/home.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
		public function createUser(){
			$User = Register::createUser($_POST["nama"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["no_telepon"],$_POST["alamat"],$_POST["kecamatan"],$_POST["kota"]);
			header("location:http://localhost/warungBer/index.php/home/home");
	}
}
?>
