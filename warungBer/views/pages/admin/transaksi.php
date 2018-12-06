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
					<li><a href="?controller=registerAdmin&action=tampilDataPetani">Data Petani</a></li>
					<li><a href="?controller=registerAdmin&action=tampilProduk">Produk Petani</a></li>
          			<li  class="active"><a href="?controller=keranjang&action=transaksiAdmin">Pembayaran</a></li>
										<li><a href="?controller=registerAdmin&action=tampilHargaP">Harga Pasar</a></li>
					
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
				<th>id Transaksi</th>
				<th>nama pembeli</th>
				<th>tanggal</th>
				<th>status</th>
				<th>Pembayaran</th>
				<th>Detail Transaksi</th>
				<th>Bukti Pembayaran</th>

			</tr>

			<?php
			$no=1;
			foreach ($posts as $item) { ?>


			<tr>
				<td><?php echo $no; ?></td>

				<td><?php echo $item['id_penjualan']; ?></td>
				<td><?php echo $item['pembeli']; ?></td>
				<td><?php echo $item['tanggal']; ?></td>
				<td><?php echo $item['status']; ?></td>
				<td>
				<a href="?controller=keranjang&action=editStatusTransaksi&id_penjualan=<?php echo $item['id_penjualan']; ?>"> <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button></a>
				</td>
				<td>
					<a href="?controller=keranjang&action=detailTransaksiAdmin&id_penjualan=<?php echo $item['id_penjualan']; ?>"> <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button></a>
				</td>
				<td>
					<a href="?controller=keranjang&action=tampilBukti&id_penjualan=<?php echo $item['id_penjualan']; ?>"> <button class="btn btn-primary"><span class="glyphicon glyphicon-list-alt"></span></button></a>
				</td>
				

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
