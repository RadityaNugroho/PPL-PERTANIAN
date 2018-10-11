<?php 

/**
 * 
 */
class Daftar extends Controller
{
//	public function __construct() {
//	parent::__construct();
//	Session::init();
//}
	
public function index(){
	$data['judul'] = 'Login';
	//$data['ptn'] = $this->model('Petani_model')->getAllpetani();
	
	$this->view('regis/login');
	
}
public function reg(){
	$this->view('regis/registrasi');
}
public function signin(){
	$this->model('User_model')->login();
}

public function logout()
{
Session::destroy();
header('location: index');
exit;
}

}

 ?>