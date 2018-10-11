<?php 

/**
 * 
 */
class Produk extends Controller
{
	
public function index(){

	$data['judul'] = 'Data Produk';
	$data['produk']  = $this->model('Produk_model')->getAllproduk();
	$this->view('templates/header', $data);
	$this->view('admin/v_produk', $data);
	$this->view('templates/footer');
}

public function createProduk(){
	$data['judul'] = 'Tambah Produk';
	$this->view('templates/header', $data);
	$this->view('v_petani/tambahProdukView');
}

public function input(){
	$action=$_POST['submit'];
	if ($_POST=='submit') {
		$foto = $_FILES['gambar_p']['name'];
		$tmp = $_FILES['gambar_p']['tmp_name'];
		$gambar_p = date('dmYHis').$foto;
		$path = "foto_produk/".$gambar_p;

		$nama_produk = isset($_POST['nama_produk'])? $_POST['nama_produk']:'';
		$harga_produk = isset($_POST['harga_produk'])? $_POST['harga_produk']:'';
		$stock = isset($_POST['stok'])? $_POST['stok']:'';
		$deskripsi = isset($_POST['deskripsi'])? $_POST['deskripsi']:'';
		
		if (move_uploaded_file($tmp, $path)) {
		$this->model('Produk_model')->pushProduk($nama_produk, $deskripsi, $harga_produk, $stock, $gambar_p);
		}
	}

}

}
 ?>