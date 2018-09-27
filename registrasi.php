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
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(img/sawah.jpg);">
                    <span class="login100-form-title-1">
                        Daftar
                    </span>
                </div>

                <form action="" class="login100-form validate-form" method="post">

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Nama harus di isi">
                        <span class="label-input100">Nama</span>
                        <input class="input100" id="nama" type="text" name="nama" placeholder="Masukan Nama Anda">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="NIK harus di isi">
                        <span class="label-input100">NIK</span>
                        <input class="input100" id="NIK" type="text" name="NIK" placeholder="Masukan NIK">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email harus di isi">
                        <span class="label-input100">Email</span>
                        <input class="input100" id="email" type="text" name="email" placeholder="Enter Email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password tidak boleh kosong">
                        <span class="label-input100">Password</span>
                        <input class="input100" id="password" type="password" name="password" placeholder="Masukkan password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password tidak boleh kosong">
                        <span class="label-input100">Konfirmasi Password</span>
                        <input class="input100" id="password2" type="password" name="password2" placeholder="Konfirmasi password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" name="daftar">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

</body>
</html>