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
			$User = RegisterAdmin::createUser($_POST["nama"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["no_telepon"]);
		header("location:index.php?controller=home&action=homeAdmin");
	}



}
?>
