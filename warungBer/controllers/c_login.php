<?php
Class LoginController{

	public function login(){
		require_once("views/pages/login.php");
	}
	public function error(){
		require_once('views/pages/error.php');
	}
	public function authentication(){
		$error='';
		if (!isset($_POST['username'])) {
				//return call('pages','error');
		}
		if(Login::find($_POST['username'],$_POST['password'])==0){
			$error="username atau password  tidak valid";
			require_once('views/pages/login.php');
		}else if(Login::find($_POST['username'],$_POST['password'])==1){
			$_SESSION['login_user']=$_POST['username'];
			header("location:http://localhost/warungBer/index.php/home/homeAdmin");
		}elseif(Login::find($_POST['username'],$_POST['password'])==2){
			$_SESSION['login_user']=$_POST['username'];

			header("location:http://localhost/warungBer/index.php/home/homePenjual");
		}
		elseif(Login::find($_POST['username'],$_POST['password'])==3){
			$_SESSION['login_user']=$_POST['username'];
			header("location:http://localhost/warungBer/index.php/home/homePembeli");
		}

	}
}
?>
