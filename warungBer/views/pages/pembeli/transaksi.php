<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
							<li><a href="?controller=home&action=showKomplain">Komplain</a></li>
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
	<div style="background-color: white;"> 
	<ul class="nav nav-pills nav-justified">
    <li class="nav-item">
      <a class="nav-link" href="?controller=home&action=showTransaksiPembeli">Pesanan Masuk</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?controller=home&action=showTransaksiDikirim">Dalam Pengiriman</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?controller=home&action=showTransaksiSelesai">Pesanan Selesai</a>
    </li>
  </ul>
</div><br>
		<table class="table" style="margin-top: 30px;">

			<tr>

				<th>No</th>
				<th>id Transaksi</th>
				<th>tanggal</th>
				<th>status</th>
				<th>action</th>
			</tr>

			<?php 
			$no=1;
			foreach ($posts as $item) { ?>
			<tr>
				<td><?php echo $no; ?></td>

				<td><?php echo $item['id_penjualan']; ?></td>
				<td><?php echo $item['tanggal']; ?></td>
				<td><?php echo $item['status']; ?></td>
				<td>
				<a href="?controller=keranjang&action=detailTransaksiPembeli&id_penjualan=<?php echo $item['id_penjualan']; ?>"> <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button></a>
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