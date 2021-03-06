<!DOCTYPE html>
<html>
<head>
	<title>login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="resources/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body class="body-custom">

	<div class="bgded" style="background-image:url('resources/img/fild.jpg');">

  <div class="wrapper overlay">
    <header id="header" class="hoc clear">
      <nav id="mainav" class="clear">

        <ul class="clear">
         	<li><a href="index.php">Beranda</a></li>
         	<li ><a href="index.php/login/login">Login</a></li>
         	<li class="active"><a href="index.php/register/register">Daftar</a></li>
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
	<!-- <nav class="navbar navbar-default">
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
					<li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					
      				<li><a href="index.php/register/register"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
      				<li><a href="index.php/login/login"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
    				</ul>
				
			</div>
		</div>
	</nav> -->
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
			<div class="form">
				<form method="POST">
					<input type="hidden" name="controller" value="register">
					<input type="hidden" name="action" value="createUser">

					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" aria-describedby="basic-addon1"
						required>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<input name="username" type="text" class="form-control" placeholder="Masukkan username" aria-describedby="basic-addon1"
						required autofocus>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<input name="password" type="password" class="form-control" placeholder="Masukkan password" aria-describedby="basic-addon1"
						required>
					</div>

					<br>

					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<input name="email" type="text" class="form-control" placeholder="Masukkan email" aria-describedby="basic-addon1"
						required>
					</div>
					<br>

					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<input name="alamat" type="text" class="form-control" placeholder="Masukkan alamat" aria-describedby="basic-addon1"
						required>
					</div>
					<br>

					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<input name="kecamatan" type="text" class="form-control" placeholder="Masukkan kecamtan" aria-describedby="basic-addon1"
						required>
					</div>
					<br>

					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<input name="kota" type="text" class="form-control" placeholder="Masukkan kota" aria-describedby="basic-addon1"
						required>
					</div>
					<br>

					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<input name="no_telepon" type="text" class="form-control" placeholder="Masukkan no telepon" aria-describedby="basic-addon1"
						required>
					</div>
					

					<p align="right">
						<button type="submit" class="btn btn-success" style="margin-top:20px;">DAFTAR</button>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>