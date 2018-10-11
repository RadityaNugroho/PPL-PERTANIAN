<?php 
/**
 * 
 */
class User extends Controller
{
	
	public function index(){
	$data['judul'] = 'Login';
	$this->view('templates/header', $data);
	$this->view('regis/login');
	$this->view('templates/footer');
}

public function run()
		{		
			$username = isset($_POST['username'])? $_POST['username']:'';
			$password = isset($_POST['password'])? $_POST['password']:'';
			if ($username=="" || $password=="") {
				echo "<script type='text/javascript'>alert('Username dan Password tidak boleh kosong');</script>";
				$this->view('regis/login');
			}else if($username=="admin" && $password=="admin"){
				$this->view('templates/header');
				$this->view('about/page');
				$this->view('templates/footer');
			}else{
				echo "<script type='text/javascript'>alert('Username dan Password Salah');</script>";
				$this->view('regis/login');
			}
			
		// if($this->model('UserModel')->find($_POST['username'],$_POST['password'])==0){
		// 	$error="username atau password  tidak valid";
		// 	require_once('views/regis/login.php');

		// }else if($this->model('UserModel')->find($_POST['username'],$_POST['password'])==1){
		// 	$_SESSION['login_user']=$_POST['username'];
		// 	$this->view('admin/index');

		// }elseif($this->model('UserModel')->find($_POST['username'],$_POST['password'])==2){
		// 	$_SESSION['login_user']=$_POST['username'];
		// 	$this->view('v_petani/index');
		// }
		// elseif($this->model('UserModel')->find($_POST['username'],$_POST['password'])==3){
		// 	$_SESSION['login_user']=$_POST['username'];
		// 	$this->view('v_konsumen/index');
		// }
		}
// logging out the user
function logout()
{
Session::destroy();
header('location: index');
exit;
}
}

 ?>