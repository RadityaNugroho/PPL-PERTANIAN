<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
</style>

</head>
<body id="top">

<div class="bgded" style="background-image:url('resources/img/sawah.jpeg.jpg');">
  <div class="wrapper overlay">
    <header id="header" class="hoc clear">
      <nav id="mainav" class="clear">
        <ul class="clear">
          <li class="active"><a href="index.html">Beranda</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Daftar</a></li>
          <li><a href="#">Product</a></li>
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
       <h1><a href="index.html">Warung Beras</a></h1>
        </div>
    </header>
  </div>
  <div id="pageintro" class="hoc clear">
  <article>
      <div class="introtxt">

        <h2 class="heading">WARUNG BERAS </h2>
        <p>Solusi Perdangan Online Produk Pertanian Langsung Dari Petani Ke Konsumen Dengan Harga Yang Pantas Untuk Semua Pihak</p>
      </div>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn inverse" href="#">Porttitor</a></li>
          <li><a class="btn" href="#">Fringilla</a></li>
        </ul>
      </footer>
    </article>
</div>
</div>

<!-- ========================================================== -->

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">WarungBeras.com</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">

					<ul class="nav navbar-nav navbar-right">
      				<li><a href="index.php/register/register"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
      				<li><a href="index.php/login/login"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
    				</ul>
				</ul>
			</div>
		</div>
	</nav>
		<div class=""></div>
		<div class="">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="resources/img/bg3.jpg">
					</div>
				</div>
			</div>
		</div>
	<hr>

<div class="container" >

	<div class="row">
			<?php foreach ($posts as $item){?>
			<div class="col-md-4" id="card">
			
					<div class="card" style="width: 25rem;">
						<img class="card-img-top" src="foto_produk/<?php echo $item['foto_produk'] ?>" alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title"><?php echo $item['nama_produk'] ?></h4>
							<p class="card-text">
								<font size="4" color="#2196F3"><b><p> <?php echo "Rp ". number_format($item['harga'],0,".",".")."/Kilogram"; ?></p></b></font>
							</p>
							<p class="card-text">

								Stok : <b><?php echo $item['jumlah_stok']." "; ?>Kilogram</b> <br>
								Oleh : <b><?php echo $item['penjual']; ?></b>

							</p>
							<a href="?controller=produk&action=detailProduk&id_produk=<?php echo $item['id_produk']; ?>" class="btn btn-primary">Lihat Detail</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
<script src="resources/scripts/jquery.min.js"></script>
<script src="resources/scripts/jquery.backtotop.js"></script>
<script src="resources/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="resources/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
	</body>
	</html>
