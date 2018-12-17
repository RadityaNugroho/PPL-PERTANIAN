<!DOCTYPE html>
<html>
<head>
	<title>detail produk</title>
	
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
		<div class="pembatas"></div>

		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form>
					<input type="hidden" name="controller" value="keranjang">
					<input type="hidden" name="action" value="addCart">

					<?php foreach ($posts as $item) {

						?>

						<input type="hidden" name="id_produk" value="<?php echo $item['id_produk']; ?>">
						<h2><?php echo $item['nama_produk'] ?></h2>
						<div class="card" style="width: 50rem; height:auto; margin-bottom:30px;">
							<img class="card-img-top" src="foto_produk/<?php echo $item['foto_produk'] ?>" alt="Card image cap">
							<div class="card-block">
								<!-- <h2 class="card-title"><?php echo $item['nama_produk'] ?></h2> -->
								<p class="card-text">
									<font size="4" color="#2196F3"><b><p> <?php echo "Rp ". number_format($item['harga'],0,".",".")."/kg"; ?></p></b></font>


								</p>
								<p class="card-text">

									Stok :<b> <?php echo $item['jumlah_stok']." "; ?>kg</b> <br>
									Oleh : <b><?php echo $item['penjual']; ?></b>
								</p>

							</div>
						</div>

						<p><h2>Deksripsi</h2><p align="justify">
							<div class="card" style="width: 50rem; height:auto; margin-bottom:30px;">

								<div class="card-block">


									<p class="card-text">

										<?php echo $item['deskripsi']; ?>
									</p>

								</div>
							</div>
						</p>
						
						<div class="form-group">
							<label style="color: #242D3E;">Jumlah pembelian </label>
							<input type="number" min="5" max="<?php echo $item['jumlah_stok']; ?>" name="jumlah" class="form-control" placeholder="Masukkan jumlah pembelian" required autofocus>
						</div>



						<button type="submit" class="btn btn-primary" style="width:40%" type="submit">Masukkan ke keranjang</button>
						<br><br><br>
						<hr>

						</form>
<!-- 						<form method="POST">
						<input type="hidden" name="controller" value="registerAdmin">
          				<input type="hidden" name="action" value="inputKomen">
						<label>Diskusi Produk</label>
						<div class="input-group">
							<textarea style="width:450px; height:100px;" name="diskusi" type="text" class="form-control" placeholder="Masukkan Pertanyaan kepada petani tentang produk" aria-describedby="basic-addon1"
							required></textarea>
						</div>
						<p align="left">
						<button type="submit" class="btn btn-success" style="margin-top:20px;">Submit</button>
						</p>
						</form> -->

					</div>
				<?php } ?>


			</body>
			</html>