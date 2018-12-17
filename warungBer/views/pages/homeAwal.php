<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="resources/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<div class="bgded" style="background-image:url('resources/img/sawah.jpeg.jpg');">
  <div class="wrapper overlay">
    <header id="header" class="hoc clear">
      <nav id="mainav" class="clear">
        <ul class="clear">
          <li class="active"><a href="index.php">Beranda</a></li>
          <li><a href="index.php/login/login">Login</a></li>
          <li><a href="index.php/register/register">Daftar</a></li>
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
       <h1><a href="index.php">Warung Beras</a></h1>
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
<!--           <li><a class="btn inverse" href="#">Porttitor</a></li>
          <li><a class="btn" href="#">Fringilla</a></li> -->
        </ul>
      </footer>
    </article>
</div>
</div>

<!-- =============== -->
<div class="wrapper row3">
  <main class="hoc container clear">

    <div class="center btmspace-50">
      <h2 class="heading">Pilih Produk Sesuai Kebutuhanmu</h2>
    </div>
    
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

  </main>
</div>
<hr>

<div class="container" >

	<div class="row">
			
			</div>
		</div>

  <div class="wrapper row4">
  <footer id="footer" class="hoc clear">

  </footer>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</body>
</html>