<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="resources/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<style type="text/css">
	
	#kotak{
		background-color: white;
		height: 1200px;
		border-radius: 20px;
		border: solid 1px orange;
	}
</style>

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
					
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="?controller=keranjang&action=showCart"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
					<!-- <li><a href=""><i class="glyphicon glyphicon-envelope"></i></a></li> -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-envelope"></i><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?controller=registerAdmin&action=tampilDataPembeli">Transaksi</a></li>
						</ul>
					</li>
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

	<div class="pembatas"></div>
	<div class="row">

	<div class="container">
		<div class="pembatas"></div>




		<div class="container">
			<div class="row" id="kotak">
			<?php foreach ($posts as $item){

				?>

			<div class="col-md-4">
				<div class="d-inline-block">
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
							<a href="?controller=produk&action=detailBeliProduk&id_produk=<?php echo $item['id_produk']; ?>" class="btn btn-primary" style="width:100%;">Beli</a>
						</div>
					</div>
				</div>
			</div>
				<?php } ?>
			</div>
		</div>
	</body>
	</html>