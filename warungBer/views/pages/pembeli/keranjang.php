<!DOCTYPE html>
<html>
<head>
	<title></title>
	

	
</head>
<body class="body-custom">
<!-- =========================== -->
	<div class="bgded" style="background-image:url('resources/img/fild.jpg');">

  <div class="wrapper overlay">
    <header id="header" class="hoc clear">
      <nav id="mainav" class="clear">

        <ul class="clear">
         	<li><a href="?controller=home&action=homePembeli">Beranda</a></li>
         	<li><a href="?controller=home&action=homePembeli">Product</a></li>
          	<li><a class="drop" href="#">Tentang Kami</a>
        <ul>
              <li><a href="#">Sejarah</a></li>
              <li><a class="drop" href="#">Nama Anggota</a>
                <ul>
                  <li><a href="#">1. Raditya Mulya Nugroho</a></li>
                  <li><a href="#">2. Muhammad Rizal Khisyam A</a></li>
                  <li><a href="#">3. Agustina Tri Andara</a></li>
                  <li><a href="#">4. Putri Kharisma Dwi Cahya</a></li>
                  <li><a href="#">5. Restu Rohmatika</a></li>

          </li>

        </ul>
      </nav>
      <div id="logo">

        <h1>Warung Beras</h1>

      </div>
    </header>
  </div>

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
				<a class="navbar-brand">WarungBeras.com</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="?controller=home&action=homePembeli">Home <span class="sr-only">(current)</span></a></li>

					<!-- <li><a href="?controller=keranjang&action=showCart">Keranjang</a></li> -->
					<!-- <li><a href="?controller=home&action=showTransaksiPembeli">Transaksi</a></li> -->
					<!-- <li><a href="?controller=home&action=pembayaran">Tes</a></li> -->
					
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="?controller=keranjang&action=showCart"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
					<li><a href=""><i class="glyphicon glyphicon-envelope"></i></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?controller=registerAdmin&action=tampilDataPembeli">Akun</a></li>
							<li><a href="?controller=home&action=showTransaksiPembeli">Pesanan</a></li>
							<li class="divider"></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
<!-- =========================== -->

	<div class="container">
		<h1>Keranjang Belanjaan</h1>
		<table class="table" style="margin-top: 30px;">

			<tr>

				<th>No</th>
				<th>nama produk</th>
				<th>penjual</th>
				<th>jumlah</th>
				<th>total harga</th>

			</tr>

			<?php 
			$no=1;
			$i=0;

			$totalBayar=0;

			if (array_key_exists('id_produk',$_SESSION) && !empty($_SESSION['id_produk'])) {
				foreach ($posts as $item) { 

					$harga=$item['harga'];
					$jumlahBeli=$item['jumlahBeli'];
					$totalHarga=$harga*$jumlahBeli;


					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $item['nama_produk']; ?></td>
						<td><?php echo $item['penjual']; ?></td>
						<td><?php echo $item['jumlahBeli']." kg" ?></td>
						<td><?php echo "Rp ". number_format($totalHarga,0,".","."); ?></td>

					</tr>
					<?php 
					$no++;
					$i++; 
					$totalBayar+=$totalHarga;
				}


			} ?>


		</table>
		<div>
			<div class="col-md-8">

			</div>
			<div class="col-md-4"><font color="blue" >
				<h3>Total Bayar	: <?php echo "Rp ". number_format($totalBayar,0,".","."); ?> </h3>
			</font>
			<div class="col-md-6"><a href="?controller=keranjang&action=bayarCart"><button class="btn btn-primary" style="width:100%">Bayar</button></a></div>
			<div class="col-md-6"><a href="?controller=keranjang&action=clearCart"><button  class="btn btn-danger" style="width:100%" >Hapus</button></a></div>

		</div>


	</div>

</div>
<br><br><br>

</body>
</html>