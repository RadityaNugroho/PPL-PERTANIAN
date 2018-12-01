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
					<li class="active"><a>Produk Petani</a></li>
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
		<div class="row">
		
			
			<?php foreach ($posts as $item){?>
			<div class="col-md-4" id="card">
			
					<div class="card" style="width: 25rem;">
						<img class="card-img-top" src="foto_produk/<?php echo $item['foto_produk'] ?>" alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title"><?php echo $item['nama_produk'] ?></h4>
							<p class="card-text">
								<font size="4" color="#2196F3"><b><p> <?php echo "Rp ". number_format($item['harga'],0,".",".")."/Kg"; ?></p></b></font>
							</p>
							<p class="card-text">

								Stok : <b><?php echo $item['jumlah_stok']." "; ?>Kg</b> <br>
								Oleh : <b><?php echo $item['penjual']; ?></b>

							</p>
							<a href="?controller=produk&action=detailProduk&id_produk=<?php echo $item['id_produk']; ?>" class="btn btn-primary">Lihat Detail</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>


</div>
<br><br><br>
</body>
</html>
