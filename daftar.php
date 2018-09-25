<?php 
	
	require 'database.php';

	if (isset($_POST["daftar"])) {
		# code...
		if (pendaftaran($_POST)>0) {
			# code...
			echo "<script>
			alert('User Baru Telah Ditambahkan!')
			</script>

			";
		}else{
			echo mysqli_error($conn);
		}

	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrasi Warga</title>
	<link rel="stylesheet" type="text/css" href="font-awesome.css">
	<style >
		body{
	background-image: url(img/as.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	opacity: 0.8;
}

h1{
	color: #264d00;
	text-align: center;
	margin: 40px auto;
	margin-bottom: 70px;
	padding-bottom: 5px;
	border-bottom: 2px solid rgb(52,73,94);
}


.regis{
	width: 500px;
	height: 440px;
	margin: auto;
	text-align: center;
	background-color: rgba(52,73,94,0.8);
	font-family: "Roboto",san-serif;
	font-size: 15px;
	border-radius: 5px;
}
.regis img{
	width: 75px;
	height: 75px;
	margin-top: -40px;
	margin-bottom: 15px;
}
 form{
	margin-top: 30px;
	margin: auto;
	padding: 20px;
}

input{
	content: "\f007";
	width: 300px;
	height: 45px;
	border-radius: 4px;
	border: none;
	padding-left: 30px;
	margin-bottom: 10px;
}

button{
	width: 90px;
	height: 40px;
	border-radius: 5px;
	border: none;
	font-weight: bold;
	font-family: "Roboto",san-serif;
	position: center;
	font-size: 15px;
	background-color: lightskyblue;
	cursor: pointer;

}

.footer{
	margin-top: 100px;
	color: #eaeaea;
	text-align: center;
	font-size: 20px;
}
	</style>
</head>
<body>
	<div class="content">
		<h1>Silahkan Lengkapi Pendaftaran terlebih Dahulu</h1>		
		<div class="regis">

			<form action="" method="post">
				<input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda"><br><br>
				<input type="text" name="NIK" id="NIK" placeholder="Masukkan NIK Anda"><br><br>
				<input type="text" name="email" id="email" placeholder="Masukkan Email Anda"><br><br>
				<input type="password" name="password" id="password" placeholder="Masukkan Password"><br><br>
				<input type="password" name="password2" id="password2" placeholder="Konfirmasi Password"><br><br>
				<button type="submit" name="daftar">Daftar</button>
			</form>	
	
		</div>
		<div class="footer">
			
		</div>
	</div>
	

</body>
</html>