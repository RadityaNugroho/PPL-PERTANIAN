<?php 

class Petani extends Controller{

public function index(){
	$data['judul'] = 'Daftar Petani';
	$data['ptn'] = $this->model('Petani_model')->getAllpetani();
	$this->view('templates/header', $data);
	$this->view('admin/index', $data);
	$this->view('templates/footer');
}

public function detail($id_user){
	$data['judul'] = 'Detail Petani';
	$data['ptn'] = $this->model('Petani_model')->getPetaniById($id_user);
	$this->view('templates/header', $data);
	$this->view('admin/detail', $data);
	$this->view('templates/footer');
}
public function v_tambahPetani(){

	$data['judul'] = 'Registrasi Petani';
	$this->view('templates/header', $data);
	$this->view('admin/tambah_petani');
	$this->view('templates/footer');
}

public function v_tambahHarga(){

	$data['judul'] = 'Tambah Harga';
	$this->view('templates/header', $data);
	$this->view('admin/tambahHarga_v');
	$this->view('templates/footer');
}

public function createPetani(){
$message = "Berhasil Ditambahkan";
$action=$_POST['submit'];
if ($action=='submit')
{
$nama = isset($_POST['nama'])? $_POST['nama']:'';
$email = isset($_POST['email'])? $_POST['email']:'';
$alamat = isset($_POST['alamat'])? $_POST['alamat']:'';
$kecamatan = isset($_POST['kecamatan'])? $_POST['kecamatan']:'';
$kota = isset($_POST['kota'])? $_POST['kota']:'';
$no_hp = isset($_POST['no_hp'])? $_POST['no_hp']:'';
$no_ktp = isset($_POST['no_ktp'])? $_POST['no_ktp']:'';
$username = isset($_POST['username'])? $_POST['username']:'';
$password = isset($_POST['password'])? $_POST['password']:'';
$this->model('Petani_model')->inputPetani($nama, $email, $alamat, $kecamatan, $kota, $no_hp, $no_ktp, $username, $password);

echo "<script type='text/javascript'>alert('$message');</script>";
$this->view('about/page');
}
}

}

 ?>
