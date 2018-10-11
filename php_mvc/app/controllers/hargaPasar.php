<?php 
/**
 * 
 */
class hargaPasar extends Controller
{
	
public function index(){
	$data['judul'] = 'Harga Pasar';
	$this->view('templates/header', $data);
	$this->view('admin/v_hargaPasar');
	$this->view('templates/footer');
}

public function createHarga(){
	$action = $_POST['submit'];
	if ($action=='submit') {
		$tanggal = isset($_POST['tanggal'])? $_POST['tanggal']:'';
		$harga_pasar = isset($_POST['harga_pasar'])? $_POST['harga_pasar']:'';
		$jenis = isset($_POST['jenis'])? $_POST['jenis']:'';
		$this->model('PasarModel')->inputHarga($tanggal, $harga_pasar, $jenis);
	}
}

public function tampil(){
	$data['judul'] = 'Harga Pasar';
	$data['h_pasar'] = $this->model('PasarModel')->getHargaPasar();

	$this->view('templates/header', $data);
	$this->view('admin/v_hargaPasar', $data);
	$this->view('templates/footer');
}
}

 ?>