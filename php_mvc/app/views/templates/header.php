<!DOCTYPE html>
<html>
<head>
	<title>halaman <?=$data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">

</head>
<body>
	<nav class="navbar navbar-default">
    <div class="container-fluid">	
      <div class="navbar-header">
        <ul class="nav navbar-nav">
    	   <li><a href="<?= BASEURL; ?>"> <i class="glyphicon glyphicon-heart"></i> ADMINCUU</a></li>
        </ul>
      </div>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= BASEURL; ?>/about/page">Home</a></li>
      <li><a href="<?= BASEURL; ?>/hargaPasar/tampil">Harga Pasar</a></li>
      <li><a href="<?= BASEURL; ?>/about">Pembayaran</a></li>
      <li><a href="<?= BASEURL; ?>/petani">Petani</a></li>
      <li><a href="<?= BASEURL; ?>/produk/createProduk">Produk</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= BASEURL; ?>">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
