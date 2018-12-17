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
          <li><a href="?controller=keranjang&action=tampilHargaP">Harga Pasar</a></li>
          			<li><a href="?controller=keranjang&action=tampilKomplain">Komplain Konsumen</a></li>
           
        </ul>
				
				<ul class="nav navbar-nav navbar-right">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-envelope"></i><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Produk</a></li>
              <li class="divider"></li>
              <li><a href="#">Saldo</a></li>
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
    

    <div class="col-md-10" id="bg">
    <table>
    	<tr>
    	<th>Tanggal</th>
		<th>Subject</th>
		<th>Notifikasi</th>
		</tr>
			<?php foreach ($notif as $item){?>
				<tr>
				<td><?php echo $item['tanggal']; ?></td>
				<td><?php echo $item['subject']; ?></td>
				<td><?php echo $item['notifikasi']; ?></td>
				</tr>
			<?php } ?>
	</table>
        
    </div>

  </div>
</div>
	

</div>



</body>
</html>
