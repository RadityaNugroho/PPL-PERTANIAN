<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="body-custom">

	<nav class="navbar navbar-default">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">WarungBeras.com</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="?controller=home&action=homePembeli">Home <span class="sr-only">(current)</span></a></li>

					<li><a href="?controller=keranjang&action=showCart">Keranjang</a></li>
					<li><a href="?controller=home&action=showTransaksiPembeli">Transaksi</a></li>
					<li><a href="?controller=home&action=pembayaran">Tes</a></li>
					<li><a href="?controller=keranjang&action=alamatPembeli">Tes2</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
				
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a >Akun</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
    <br><br><br>

      <?php
      foreach ($posts as $item) { ?>
<div class="col-md-5">
	<form method="POST" class="form">
		<input type="hidden" name="controller" value="registerAdmin">
		<input type="hidden" name="action" value="ubahDataPembeli">
	<label>Nama</label>
     <input type="text" name="nama" class="form-control" value="<?php echo $item['nama']; ?>">
     <br>
     <label>Username</label>
     <input type="text" name="username" class="form-control" value="<?php echo $item['username']; ?>">
     <br>
     <label>Password</label>
     <input type="text" name="password" class="form-control" value="<?php echo $item['password']; ?>">
     <br>
     <label>E-mail</label>
     <input type="text" name="email" class="form-control" value="<?php echo $item['email']; ?>">
     <br>
     <label>Alamat</label>
     <input type="text" name="alamat" class="form-control" value="<?php echo $item['alamat']; ?>">
     <br>
     <label>Kecamatan</label>
     <input type="text" name="kecamatan" class="form-control" value="<?php echo $item['kecamatan']; ?>">
     <br>
     <label>Kota</label>
     <input type="text" name="kota" class="form-control" value="<?php echo $item['kota']; ?>">
     <br>
     <label>Nomor Telepon</label>
     <input type="text" name="no_telepon" class="form-control" value="<?php echo $item['no_telepon']; ?>">
     <br>
     <p align="right">
	 <button type="submit" class="btn btn-success" style="margin-top:20px;">UBAH AKUN</button>
	</p>
</form>
</div>
      

      <?php
    }?>
</body>
</html>