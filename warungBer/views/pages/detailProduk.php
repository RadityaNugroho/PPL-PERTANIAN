<!DOCTYPE html>
<html>
<head>
	<title>detail produk</title>
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

        </ul>
      </footer>
    </article>
</div>
</div>
<marquee> SILAHKAN LAKUKAN PENDAFTARAN UNTUK MELAKUKAN PEMBELIAN </marquee>
<!-- =============== -->

	<div class="container">

		<div class="row">
			<div class="col-md-5">
				<?php foreach ($posts as $item) {

					?>
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
								Oleh Petani : <b><?php echo $item['penjual']; ?></b>
							</p>

						</div>
					</div>
				</div>
				<?php } ?>
			</p>
			<div class="col-md-5">
				<p><h2>Deksripsi</h2><p align="justify">
						<div class="card" style="width: 50rem; height:auto; margin-bottom:30px;">

							<div class="card-block">


								<p class="card-text">

									<?php echo $item['deskripsi']; ?>
								</p>

							</div>
						</div>
					</p>
			</div>
		

<!-- 				<label>Diskusi Produk</label>
						<div class="input-group">

							<textarea style="width:450px; height:100px;" name="deskripsi" type="text" class="form-control" placeholder="Masukkan Komentar produk disini" aria-describedby="basic-addon1"
							required></textarea>

						</div>
						<p align="left">
						<button type="submit" class="btn btn-success" style="margin-top:20px;">Submit</button>
					</p> -->



</body>
</html>
