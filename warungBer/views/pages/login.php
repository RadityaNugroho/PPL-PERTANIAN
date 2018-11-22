<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style type="text/css">
		body{
			background-color: #ccffcc;
		}
	</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="resources/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body class="body-custom">

	<div class="bgded" style="background-image:url('resources/img/register.jpg');">

  <div class="wrapper overlay">
    <header id="header" class="hoc clear">
      <nav id="mainav" class="clear">

        <ul class="clear">
         	<li><a href="index.php">Beranda</a></li>
         	<li class="active"><a href="index.php/login/login">Login</a></li>
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

        <h1><a href="index.html">Warung Beras</a></h1>

      </div>
    </header>
  </div>

  <div id="pageintro" class="hoc clear">

	<!-- <nav class="navbar navbar-inverse">
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
			<p><h1>Login</h1></p>
			<div class="form">
			<form method="POST">
				<input type="hidden" name="controller" value="login">
				<input type="hidden" name="action" value="authentication">


				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
					<input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1"
					 required autofocus>
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
					<input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1"
					 required>
				</div>
				<p align="right">
					<button type="submit" class="btn btn-primary" style="margin-top:20px;">LOGIN</button>
				</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>