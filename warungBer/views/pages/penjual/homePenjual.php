<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
  body{
    background-color: #b3ffff;
  }
  #bg{
    background-color: white;
    border-radius: 10px;
  }
</style>
</head>


<body class="body-custom">
	<!-- <h1>PENJUAL PANEL</h1> -->
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
					<li class="active"><a href="?controller=home&action=homePenjual">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola produk<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?controller=produk&action=createProduk">Input data produk</a></li>
							<li><a href="?controller=produk&action=showAllProdukPenjual">Lihat data produk</a></li>
							 <!-- <li><a href="?controller=register&action=register">Register</a></li> -->

						 </ul>
					</li>
          <li><a href="?controller=keranjang&action=transaksiPenjual">Pesanan</a></li>
          <li><a href="?controller=keranjang&action=tampilSaldo">Dana Masuk</a></li>
          <li><a href="?controller=keranjang&action=tampilHargaP">Harga Pasar</a></li>
          <li><a href="?controller=keranjang&action=tampilKomplain">Komplain Konsumen</a></li>
           
        </ul>
				
				<ul class="nav navbar-nav navbar-right">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-envelope"></i><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Produk</a></li>
              <li class="divider"></li>
              <li><a href="?controller=home&action=showNotif">Saldo</a></li>
            </ul>
          </li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
              <li><a href="?controller=registerAdmin&action=tampilDataUser">Akun</a></li>
							<li><a href="logout.php">Logout</a></li>
							<!-- <li><a href="?controller=register&action=register">Register</a></li> -->

						</ul>
					</li>

				</ul>
			</div>
		</div>
	</nav>

<div class="container" style="background-color: #b3ffff;">
  <div class="row">
    
    <div class="col-md-4">
  <div class="panel panel-default" style="border:none; border-radius: 5px 5px 10px 10px;">
    <div class="panel-heading" style="background-color: #526485; border: none;">
      <header class="panel-title">
        <div class="text-center">
          <strong style="color: white;">Profile</strong>
        </div>
      </header>
    </div>
    <div class="panel-body" style="background-color: #242D3E; border-radius: 0px 0px 10px 10px; border: none;">
      <div class="text-center" id="author">
        <br>
        <img src="resources/img/petani.png" style="width: 190px; height: 180px;">
        <br>
        <h3 style="color: white;">Petani</h3>
        <small class="label label-warning" style="color: white;"><?php echo $_SESSION['nama_user'];?></small>
        <br><br>
        <p><a href="?controller=registerAdmin&action=tampilDataUser" class="btn btn-primary" role="button">Detail Akun</a>
        <br><br>
        <p style="color: white;">Selamat Datang Petani</p>
      </div>
    </div>
  </div>
</div>

    <div class="col-md-7" id="bg">
      
        <?php foreach ($stat as $item){

         ?>
              <label>Total Produk Anda Yang Terjual</label>
              <h3 class="count" style="color: black;"><?php echo $item['terjual']." Kilogram"; ?></h3>
              <hr>

              <label>Total Stok Produk Anda</label>
              <h3 class="count2" style="color: black;"><?php echo $item['jumlah_stok']." Kilogram"; ?></h3>
              <hr>

              <label>Produk Yang Sering Dibeli Konsumen</label>
              <h3 class="count4" style="color: black;"><?php echo $item['nama_produk']; ?></h3>
              <hr>

              <label>Saldo Anda</label>
              <h3 class="count4" style="color: black;"><?php echo "Rp ". number_format($item['saldo'],0,".",".") ; ?></h3>

            <?php } ?>
    </div>

  </div>
</div>
	

</div>



</body>
</html>
