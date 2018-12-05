<?php
Class KeranjangController{

	public function addCart(){

		$_SESSION['id_produk'][]=$_GET['id_produk'];
		$_SESSION['jumlah'][]=$_GET['jumlah'];
		header("location:index.php?controller=keranjang&action=showCart");
	}

public function showCart(){
	
		if(array_key_exists('id_produk',$_SESSION) && !empty($_SESSION['id_produk'])) {
			$id_produk=$_SESSION['id_produk'];
			$posts=Keranjang::showCart($id_produk);

		}
			require_once("views/pages/pembeli/keranjang.php");
}

public function clearCart(){
	unset($_SESSION['id_produk']);
	unset($_SESSION['jumlah']);
	header("location:index.php?controller=home&action=homePembeli");
}
public function bayarCart(){
	$id_produk=$_SESSION["id_produk"];
	$jumlah=$_SESSION["jumlah"];
	$id_user=$_SESSION["id_user"];
	$posts=Keranjang::bayarCart($id_user,$id_produk,$jumlah);
	header("location:index.php?controller=keranjang&action=alamatPembeli");
}

public function detailTransaksiPembeli(){

	if (isset($_SESSION['login_user'])) {
		$posts=Keranjang::detailTransaksiPembeli($_GET['id_penjualan']);
		require_once("views/pages/pembeli/detailTransaksi.php");
	}

	else{
		header('location:index.php?controller=login&action=login');
	}
}


public function detailTransaksiAdmin(){

	if (isset($_SESSION['login_user'])) {
		$posts=Keranjang::detailTransaksiAdmin($_GET['id_penjualan']);
		require_once("views/pages/admin/detailTransaksi.php");
	}

	else{
		header('location:index.php?controller=login&action=login');
	}
}

public function transaksiPenjual(){

	if (isset($_SESSION['login_user'])) {
		$posts=Keranjang::transaksiPenjual();
		require_once("views/pages/penjual/transaksi.php");
	}

	else{
		header('location:index.php?controller=login&action=login');
	}
}

public function transaksiAdmin(){

	if (isset($_SESSION['login_user'])) {
		$posts=Keranjang::transaksiAdmin();
		require_once("views/pages/admin/transaksi.php");
	}

	else{
		header('location:index.php?controller=login&action=login');
	}
}

public function editStatusTransaksi(){
	$posts=Keranjang::editStatusTransaksi($_GET['id_penjualan']);
	header("location:index.php?controller=keranjang&action=transaksiAdmin");
}

public function editPengiriman(){
	$posts=Keranjang::editPengiriman($_GET['id_penjualan']);
	header("location:index.php?controller=keranjang&action=transaksiPenjual");
}

public function editAlamat(){
	$post=Keranjang::editTransaksi($_POST['alamat'],$_POST['kecamatan'],$_POST['kota']);
	header("location:index.php?controller=home&action=showTransaksiPembeli");
}
public function alamatPembeli(){

		if (isset($_SESSION['login_user'])) {
			$pos=Keranjang::tampilAlamat();
			require_once("views/pages/pembeli/detailPengiriman.php");
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
	}

public function editBukti(){
		$foto = $_FILES['bukti_transfer']['name'];
		$tmp = $_FILES['bukti_transfer']['tmp_name'];
		$bukti_transfer = date('dmYHis').$foto;
		$path = "bukti_transfer/".$bukti_transfer;

		if (move_uploaded_file($tmp, $path)) {
			$post=Keranjang::addBukti($_GET['id_penjualan'], $bukti_transfer);
		}
		header("location:index.php?controller=home&action=showTransaksiPembeli");
}

public function tampilBukti(){

	$posts=Keranjang::tampilBukti($_GET['id_penjualan']);
	require_once("views/pages/admin/buktiBayar.php");
}

public function pesananSelesai(){
	$post=Keranjang::pesananSelesai($_GET['id_penjualan']);
	header("location:index.php?controller=home&action=showTransaksiSelesai");
}
}

?>
