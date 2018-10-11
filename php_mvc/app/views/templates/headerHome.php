<!DOCTYPE html>
<html>
<head>
	<title>halaman <?=$data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.css"> -->
  <link rel="stylesheet" type="text/css" href="resources/css/style.css">
	<style type="text/css">
	</style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">	
      <div class="navbar-header">
        <ul class="nav navbar-nav">
    	   <li><a href="<?= BASEURL; ?>">WARUNG BERAS</a></li>
        </ul>
      </div>
      <ul class="nav navbar-nav navbar-left">
      <li><a href="<?= BASEURL; ?>">Home</a></li>
      <li><a href="#">Pesan Sekarang</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="<?= BASEURL; ?>/daftar">Login</a></li>
      <li><a href="<?= BASEURL; ?>/daftar/reg">Register</a></li>
    </ul>
  </div>
</nav>