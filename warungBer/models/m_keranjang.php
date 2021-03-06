<?php 
class Keranjang
{
	
	public $id_produk;
	public $jumlah;
	
	public $nama_produk;
	public $harga;
	public $jumlah_stok;
	public $cabang;
	public $foto_produk;
	public $deskripsi;

	function __construct($id_produk,$nama_produk,$harga,$jumlah_stok,$cabang,$foto_produk,$deskripsi,$jumlah)
	{
		
		$this->id_produk=$id_produk;
		$this->jumlah=$jumlah;
		$this->nama_produk=$nama_produk;
		$this->harga=$harga;
		$this->jumlah_stok=$jumlah_stok;
		$this->cabang=$cabang;
		$this->foto_produk=$foto_produk;
		$this->deskripsi=$deskripsi;


	}

	public static function showCart($id_produk){
		$id=implode(",", $id_produk);
		$list=[];
		$db = DB::getInstance();

		for ($i=0; $i < count($_SESSION["id_produk"]); $i++) { 
			$req = $db->query("SELECT * 
				FROM produk p JOIN users u
				on p.id_user=u.id_user
				where id_produk=".$_SESSION['id_produk'][$i]);

foreach ($req as $item) {
	$list[$i]=array(
		'id_produk'=>$item['id_produk'],
		'nama_produk'=>$item['nama_produk'],
		'harga'=>$item['harga'],
		'jumlah_stok'=>$item['jumlah_stok'],
		'foto_produk'=>$item['foto_produk'],
		'deskripsi'=>$item['deskripsi'],
		'jumlahBeli'=>$_SESSION["jumlah"][$i],
		'penjual'=>$item['nama']
		);
}

}
return $list;
}

public static function bayarCart($id_user,$id_produk,$jumlah){
	$db = DB::getInstance();
	$insert1 = $db->query("INSERT INTO tb_penjualan (id_penjualan, id_user,tanggal,status) 
		VALUES (NULL, '".$id_user."',curdate(),'Belum Terverifikasi')");

	$id_penjualan;
	$select1=$db->query("SELECT * from tb_penjualan where id_user=$id_user order by id_penjualan DESC LIMIT 0,1");
	foreach ($select1->fetchAll() as $post) {
		$id_penjualan=$post["id_penjualan"];
	}


	for ($i=0; $i < count($_SESSION["id_produk"]) ; $i++) { 
		$insert2 = $db->query("INSERT INTO 
			`detail_penjualan`(`id_penjualan`, `id_produk`, `jumlah`, `total_harga`, `tanggal`) 
			VALUES ($id_penjualan,".$_SESSION['id_produk'][$i].",".$_SESSION['jumlah'][$i].",
				(SELECT harga from produk where id_produk=".$_SESSION['id_produk'][$i].")*".$_SESSION['jumlah'][$i].",curdate())");
	}

	unset($_SESSION['id_produk']);
	unset($_SESSION['jumlah']);

return $insert2;
}

public function detailTransaksiPembeli($id_penjualan){
	$list=[];
	$db = DB::getInstance();

	$req = $db->query("SELECT p.nama_produk,dp.jumlah,dp.total_harga,dp.tanggal FROM detail_penjualan dp
		JOIN produk p on dp.id_produk=p.id_produk
		WHERE id_penjualan=$id_penjualan");

foreach ($req as $item) {
	$list[]=array(
		'nama_produk'=>$item['nama_produk'],
		'total_harga'=>$item['total_harga'],
		'tanggal'=>$item['tanggal'],
		'jumlahBeli'=>$item['jumlah']
		);
}


return $list;
}

public function detailTransaksiAdmin($id_penjualan){
	$list=[];
	$db = DB::getInstance();

	$req = $db->query("SELECT p.nama_produk,dp.jumlah,dp.total_harga,dp.tanggal,u.nama FROM detail_penjualan dp
		JOIN produk p on dp.id_produk=p.id_produk JOIN users u on p.id_user=u.id_user

		WHERE id_penjualan=$id_penjualan");

foreach ($req as $item) {
	$list[]=array(
		'nama_produk'=>$item['nama_produk'],
		'total_harga'=>$item['total_harga'],
		'tanggal'=>$item['tanggal'],
		'jumlahBeli'=>$item['jumlah'],
		'penjual'=>$item['nama']
		);
}


return $list;
}

public function transaksiPenjual(){
	$list=[];
	$db = DB::getInstance();

	$req = $db->query("SELECT p.nama_produk,dp.jumlah,dp.total_harga,dp.tanggal,dp.id_penjualan,
		(SELECT status FROM tb_penjualan WHERE id_penjualan=dp.id_penjualan) as status,
		(SELECT u.nama FROM tb_penjualan o JOIN users u ON o.id_user=u.id_user WHERE id_penjualan=dp.id_penjualan) as pembeli,
		(SELECT u.alamat FROM tb_penjualan o JOIN users u ON o.id_user=u.id_user WHERE id_penjualan=dp.id_penjualan) as alamat,
		(SELECT u.kecamatan FROM tb_penjualan o JOIN users u ON o.id_user=u.id_user WHERE id_penjualan=dp.id_penjualan) as kecamatan,
		(SELECT u.kota FROM tb_penjualan o JOIN users u ON o.id_user=u.id_user WHERE id_penjualan=dp.id_penjualan) as kota
		
		FROM detail_penjualan dp
		JOIN produk p on dp.id_produk=p.id_produk join users u ON p.id_user=u.id_user join tb_penjualan tb on
		dp.id_penjualan=tb.id_penjualan
		WHERE tb.status='Terverifikasi' AND p.id_user=".$_SESSION['id_user']);

foreach ($req as $item) {
	$list[]=array(
		'nama_produk'=>$item['nama_produk'],
		'total_harga'=>$item['total_harga'],
		'tanggal'=>$item['tanggal'],
		'jumlahBeli'=>$item['jumlah'],
		'status'=>$item['status'],
		'pembeli'=>$item['pembeli'],
		'alamat'=>$item['alamat'],
		'kecamatan'=>$item['kecamatan'],
		'kota'=>$item['kota'],
		'id_penjualan'=>$item['id_penjualan']
		);
}


return $list;
}

public function transaksiAdmin(){
	$list=[];
	$db = DB::getInstance();

	$req = $db->query("SELECT id_penjualan,u.nama,tanggal,status from tb_penjualan o 
		JOIN users u ON o.id_user=u.id_user where status='Belum Terverifikasi'");

foreach ($req as $item) {
	$list[]=array(
		'id_penjualan'=>$item['id_penjualan'],
		'pembeli'=>$item['nama'],
		'tanggal'=>$item['tanggal'],
		'status'=>$item['status'],
		);
}
return $list;
}

public function tampilBukti($id_penjualan){
	$list=[];
	$db = DB::getInstance();

	$req = $db->query("SELECT bukti_transfer from tb_penjualan where id_penjualan='$id_penjualan'");

	return $req;
}

public function editStatusTransaksi($id_penjualan){
		$db = DB::getInstance();
		$id_produk=array();
		$jumlah=array();
		
		$req2 = $db->query("SELECT * FROM detail_penjualan WHERE id_penjualan='$id_penjualan'
			");
		foreach ($req2->fetchAll() as $post) {

			$id_produk[] = $post['id_produk'];
			$jumlah[]=$post['jumlah'];
		}

		$req3 = $db->query("SELECT status FROM tb_penjualan WHERE id_penjualan='$id_penjualan'
			");
		foreach ($req3->fetchAll() as $post) {

			$status=$post['status'];
		}
		if (strcasecmp($status,"Belum Terverifikasi")==0) {
			for ($i=0; $i <count($jumlah); $i++) { 
				$req4 = $db->query("UPDATE produk set jumlah_stok=jumlah_stok-'$jumlah[$i]' where 
					id_produk='$id_produk[$i]'
					");
			}
		}
		// $ins = $db->query("INSERT INTO notifikasi VALUES(NULL,)")

		$req = $db->query("UPDATE tb_penjualan set status='Terverifikasi' where id_penjualan='$id_penjualan'
			");
		return $req4;
	}

	public function editPengiriman($id_penjualan){
		$db = DB::getInstance();
		$req = $db->query("UPDATE tb_penjualan set status='Dalam Pengiriman' where id_penjualan=".$id_penjualan
			);
		return $req;
	}

public function editTransaksi($alamat,$kecamatan,$kota){
		$db = DB::getInstance();
		$tes = $_SESSION["id_user"];
		$req=$db->query("UPDATE users set alamat='$alamat', kecamatan='$kecamatan', kota='$kota'
			where id_user=".$tes);

		return $req;
		
	}

public function tampilAlamat(){
	$db = DB::getInstance();

		$tes = $_SESSION["id_user"];
		$req = $db->query("SELECT * from users where id_user =".$tes);

		return $req;
}

public function addBukti($id_penjualan, $bukti_transfer){
	$db = DB::getInstance();
	$req=$db->query("UPDATE tb_penjualan set bukti_transfer='$bukti_transfer' where id_penjualan=".$id_penjualan);

	return $req;
}

public function pesananSelesai($id_penjualan){
	$db = DB::getInstance();
	$req = $db->query("UPDATE tb_penjualan set status='Pesanan Diterima' where id_penjualan=".$id_penjualan);

	return $req;
}

public function komplain($id_penjualan,$id_user,$no_telp,$komplain){
	$db = DB::getInstance();
	$req = $db->query("INSERT INTO komplain VALUES(NULL,'".$id_penjualan."','".$id_user."','".$no_telp."','".$komplain."',curdate())");

	return $req;
}

public function tampilPesanan($id_penjualan){
	$db = DB::getInstance();
	$req = $db->query("SELECT * FROM tb_penjualan where status='Pesanan Diterima' and id_penjualan=".$id_penjualan);

	return $req;
}

public function tampilKomplain(){
	$db = DB::getInstance();
	$req = $db->query("SELECT k.tanggal,k.no_telp,k.komplain,p.nama_produk,
	(SELECT u.nama FROM tb_penjualan o JOIN users u ON o.id_user=u.id_user WHERE id_penjualan=dp.id_penjualan) as konsumen  
	from komplain k join tb_penjualan tp on k.id_penjualan=tp.id_penjualan 
		join detail_penjualan dp on tp.id_penjualan=dp.id_penjualan join produk p on dp.id_produk=p.id_produk join users u on p.id_user=u.id_user where p.id_user='".$_SESSION['id_user']."'");

	return $req;

	foreach ($req as $item) {
	$list[]=array(
		
		'tanggal'=>$item['tanggal'],
		'no_telp'=>$item['no_telp'],
		'konsumen'=>$item['konsumen'],
		'nama_produk'=>$item['nama_produk'],
		'komplain'=>$item['komplain']

		);
}
}
public function tampilDana(){
	$db = DB::getInstance();
	$req = $db->query("SELECT * from saldo where id_user='".$_SESSION['id_user']."'");

	return $req;
}

public static function tampilHargaPasar(){
	$db = DB::getInstance();
	$req = $db->query("SELECT * from harga_pasar");

	return $req;
}

}

?>