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
					<li class="active"><a>Data Petani</a></li>
					<li><a href="?controller=registerAdmin&action=tampilProduk">Produk Petani</a></li>
          			<li ><a href="?controller=keranjang&action=transaksiAdmin">Pembayaran</a></li>
					<li><a href="?controller=registerAdmin&action=tampilHargaP">Harga Pasar</a></li>
					
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

		<table class="table" style="margin-top: 30px;">

			<tr>

				<th>No</th>
				<th>Nama Petani</th>
				<th>Username</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Kecamatan</th>
				<th>Kota</th>
				<th>No Telepon</th>
				<th>Notifikasi</th>
				<th>Saldo</th>

			</tr>

			<?php
			$no=1;
			foreach ($posts as $item) { ?>


			<tr>
				<td><?php echo $no; ?></td>

				<td><?php echo $item['nama']; ?></td>
				<td><?php echo $item['username']; ?></td>
				<td><?php echo $item['email']; ?></td>
				<td><?php echo $item['alamat']; ?></td>
				<td><?php echo $item['kecamatan']; ?></td>
				<td><?php echo $item['kota']; ?></td>
				<td><?php echo $item['no_telepon']; ?></td>
				<td>
					<a href="?controller=registerAdmin&action=inputNotif&id_user=<?php echo $item['id_user'] ?>"> <button class="btn btn-success"><span class="glyphicon glyphicon-envelope"></span></button></a>
				</td>
				<td>
					<a href="?controller=registerAdmin&action=detailPetani&id_user=<?php echo $item['id_user'] ?>" data-toggle="modal"><button class="btn btn-success"><span class="glyphicon glyphicon-usd" data-toggle="modal"></span></button></a>
				</td>
			</tr>
			<?php
			$no++;
		}

		?>
	</table>
</div>

<div class="modal fade" id="saldo" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 style="text-align: center;">Input Saldo Petani</h4>
                </div>
                <form>
                <div class="modal-body">
                    <label>Nominal Saldo</label>
                    <div >
                        <input type="text" class="form-control" name="saldo" placeholder="">
                    </div>
                    <br>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-default action-button">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</body>
</html>
