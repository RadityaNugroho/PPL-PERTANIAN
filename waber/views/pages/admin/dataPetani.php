<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" >WaBer.com</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="?controller=home&action=homeAdmin">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="?controller=registerAdmin&action=register">Daftarkan Petani</a></li>
					<li class="active"><a>Data Petani</a></li>
          			<li ><a href="?controller=keranjang&action=transaksiAdmin">Pembayaran</a></li>
					<li><a >Harga Pasar</a></li>
					
				</ul>
				
				<ul class="nav navbar-nav navbar-right">

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<br><br><br>
		<table class="table" style="margin-top: 30px;">

			<tr>

				<th>No</th>
				<!-- <th>id produk</th> -->
				<th>Nama Petani</th>
				<th>Username</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Kecamatan</th>
				<th>Kota</th>
				<th>No Telepon</th>

			</tr>

			<?php
			$no=1;
			foreach ($posts as $item) { ?>


			<tr>
				<td><?php echo $no; ?></td>

				<td><?php echo $item['nama']; ?></td>
				<td><?php echo $item['username']; ?></td>
				<td><?php echo $item['email']; ?></td>
				<td><?php echo $item['alamat']; ?></td>
				<td><?php echo $item['kecamatan']; ?></td>
				<td><?php echo $item['kota']; ?></td>
				<td><?php echo $item['no_telepon']; ?></td>
			</tr>
			<?php
			$no++;
		}

		?>


	</table>


</div>
<br><br><br>
</body>
</html>
