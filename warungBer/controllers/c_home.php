<?php 
Class HomeController{

	public function home(){
		
		$posts=Produk::showAllProduk();
		require_once("views/pages/homeAwal.php");
	}

	public function pembayaran(){
		require_once("views/pages/pembeli/pembayaran.php");
	}
	public function homeAdmin(){
		if (isset($_SESSION['login_user'])) {
			$stat=Home::showStatAdmin();
			$user=User::showDataUser();
			require_once("views/pages/admin/homeAdmin.php");
		}
		else{
			header('location:index.php?controller=login&action=login');
		}
	}
	public function homePenjual(){
		if (isset($_SESSION['login_user'])) {
			$stat=Home::showStat();
			$user=User::showDataUser();

			require_once("views/pages/penjual/homePenjual.php");
		}
		else{
			header('location:index.php?controller=login&action=login');
		}

		
	}
	public function homePembeli(){
		if (isset($_SESSION['login_user'])) {
			$posts=Produk::showAllProduk();
			$user=User::showDataUser();
			require_once("views/pages/pembeli/homePembeli.php");
		}
		else{
			header('location:index.php?controller=login&action=login');
		}	
	}


	public function showTransaksiPembeli(){

		if (isset($_SESSION['login_user'])) {
			$posts=Home::showTransaksiPembeli($_SESSION['id_user']);
			require_once('views/pages/pembeli/transaksi.php');
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
	}

		public function showTransaksiDikirim(){

		if (isset($_SESSION['login_user'])) {
			$posts=Home::showTransaksiDikirim($_SESSION['id_user']);
			require_once('views/pages/pembeli/transaksiDikirim.php');
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
	}

	public function showTransaksiSelesai(){

		if (isset($_SESSION['login_user'])) {
			$posts=Home::showTransaksiSelesai($_SESSION['id_user']);
			require_once('views/pages/pembeli/transaksiSelesai.php');
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
	}

	public function showNotif(){
		if (isset($_SESSION['login_user'])) {
			$notif=Home::notif();
			require_once('views/pages/penjual/notifSaldo.php');
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
	}
}
?>
