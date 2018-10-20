<!DOCTYPE html>
<html>
<head>
	<title>simatrix</title>



</head>
<body class="body-custom">
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
				<a class="navbar-brand">WaBer.com</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li ><a href="?controller=home&action=homePenjual">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola produk<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?controller=produk&action=createProduk">Input data produk</a></li>
							<li><a href="?controller=produk&action=showAllProdukPenjual">Lihat data produk</a></li>
							
						</ul>
					</li>
					<li class="active"><a href="?controller=keranjang&action=transaksiPenjual">Pesanan</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="logout.php">Logout</a></li>
							<!-- <li><a href="?controller=register&action=register">Register</a></li> -->

						</ul>
					</li>

				</ul>
			</div>
		</div>
	</nav>

	<div class="pembatas"></div>
	<div class="container">
		<br><br><br>
		<h1>Order masuk</h1>
		<table class="table" style="margin-top: 30px;">

			<tr>

				<th>No</th>
				<!-- <th>id produk</th> -->
				<th>nama produk</th>
				<!-- <th>penjual</th> -->
				<th>jumlah</th>
				<th>total harga</th>
				<th>status</th>
				<th>nama pembeli</th>

			</tr>

			<?php
			$no=1;
			$i=0;

			$totalBayar=0;


			foreach ($posts as $item) {
					/*$harga=$post->harga;
					$jumlahBeli=$post->jumlah;
					$totalHarga=$harga*$jumlahBeli;*/

					//$harga=$item['harga'];
					$jumlahBeli=$item['jumlahBeli'];
					$totalHarga=$item['total_harga'];


					?>
					<tr>
						<td><?php echo $no; ?></td>
						<!-- <td><?php echo $post->id_produk; ?></td> -->
						<td><?php echo $item['nama_produk']; ?></td>
						<!-- <td><?php echo $item['penjual']; ?></td> -->
						<td><?php echo $item['jumlahBeli']." kg" ?></td>
						<td><?php echo "Rp ". number_format($totalHarga,0,".","."); ?></td>
						<td><?php echo $item['status']; ?></td>
						<td><?php echo $item['pembeli']; ?></td>

					</tr>
					<?php
					$no++;
					$i++;
					$totalBayar+=$totalHarga;
				}


				?>


			</table>
			<div>
				<div class="col-md-8">

				</div>
				<div class="col-md-4"><font color="blue" >
					<h3>Total Bayar	: <?php echo "Rp ". number_format($totalBayar,0,".","."); ?> </h3>
				</font>


			</div>


		</div>

	</div>
	<br><br><br>

</body>
</html>
