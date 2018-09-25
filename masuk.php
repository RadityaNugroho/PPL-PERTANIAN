<?php 
	session_start();
	require 'database.php';

	if(isset($_POST["login"])){
		$nik      = $_POST["nik"];
		$password = $_POST["password"];


		$result =mysqli_query($conn,"SELECT * FROM akun WHERE nik='$nik'");


		//cek nik
		if(mysqli_num_rows($result) === 1){

			//cek password
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password,$row["password"]) ){

				$_SESSION["login"] = true;

				header("Location:homepage.php");
				exit;
			}
		}

		$error = true;
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="font-awesome.css">
	<style>
	body{
		font:20px/28px "Roboto",san-serif;
		background-image: url(img/as.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		opacity: 0.85;
	}
	.header h1{
		margin-top: 50px;
		padding-bottom: 20px;
		text-align: center;
		color: #eaeaea;
		text-shadow: 5px 2px 5px black;
		border-bottom: 3px solid rgb(52,73,94);
}
	.main{
		width: 500px;
		height: 350px;
		text-align: center;
		background-color: rgba(52,73,94,0.8);
		margin: 0 auto;
		margin-top: 100px;
		border-radius: 5px;
	}
	.main img{
		width: 120px;
		height: 120px;
		margin-top: -50px;
		margin-bottom: 30px;
	}
	input{
		border-radius: 5px;
		border:none;
		width: 300px;
		height: 45px;
		margin-bottom: 30px;
		padding-left: 30px;
	}

	.form-input ::before {
		 content: "\f007";
		font-family:"FontAwesome"; 
		padding-left: 5px;
		padding-top: 5px;
		position: absolute;
		color: #9B59B6;
		font-size: 35px;

	}

	.tombol button{
		padding: 15px 30px;
		background-color: lightskyblue;
		border-radius: 4px;
		border :none;
		font-family:"Roboto",san-serif;
		font-weight: bold;
		font-size: 15px;
		cursor: pointer;

}
	.war h3{
	padding: 20px;
	text-align: center;
	color: white;
	font-family:"Roboto",san-serif;

}

	
	.footer{
	
	
	margin-top: 100px;
	color: #eaeaea;
	text-align: center;
}

.cf:before,
.cf:after {
	content: " ";
	display: table;
}
.cf:after{
	clear: both;
}
.cf{
	*zoom :1;
}
	</style>
</head>
<body>
	<div class="content">
	<div class="header">
	<h1>Silahkan Login Terlebih Dahulu</h1>
	</div>
	<div class="war">

	<?php if (isset($error)) : ?>
		<h3 >Login Gagal,NIK <i>atau</i> Password yang anda masukkan Salah</h3>

	<?php endif; ?>
	</div>
	<div class="main cf">
	
	<div class="form ">
	<form action="" method="post">
		<div class="form-input">
				
				<input type="text" name="nik" placeholder="Masukkan NIK anda">	
		</div>
		<div class="form-input">
			
				
				<input type="password" name="password" placeholder="Masukkan Password">
			
		</div>
		<div class="tombol">
			<button type="submit" name="login">Masuk</button>
		</div>
	</form>
	</div>
	</div>
	<div class="footer">
		&copy Copyright 2017
	</div>
	</div>
</body>
</html>