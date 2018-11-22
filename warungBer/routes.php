<?php
function call($controller, $action){
	require_once('controllers/c_'.$controller.'.php');

	switch ($controller) {
		case 'login':
		require_once('models/m_login.php');
		$controller=new LoginController();
		break;

		case 'register':
		$controller=new RegisterController();
		require_once('models/m_register.php');
		break;

		case 'registerAdmin':
		$controller=new RegisterAdminController();
		require_once('models/m_registerAdmin.php');
		break;

		case 'home':
		$controller=new HomeController();
		require_once('models/m_home.php');
		require_once('models/m_produk.php');
		require_once('models/m_user.php');
		break;

		case 'produk':
		//require_once('models/m_home.php');
		require_once('models/m_produk.php');
		$controller=new ProdukController();
		break;

		case 'laporan':
		require_once('models/m_laporan.php');
		$controller=new LaporanController();
		break;

		case 'keranjang':
		require_once('models/m_home.php');
		require_once('models/m_keranjang.php');
		$controller=new KeranjangController();
		break;

		case 'peramalan':
		require_once('models/m_home.php');
		require_once('models/m_produk.php');
		require_once('models/m_user.php');
		require_once('models/m_keranjang.php');
		$controller=new PeramalanController();
		break;


	}
	$controller->{ $action }();
}

call($controller,$action);

?>
