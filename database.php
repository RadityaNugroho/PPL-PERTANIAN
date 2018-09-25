<?php 
	//koneksi ke database
$conn = mysqli_connect("localhost","root","","waber");

function query($query){
	global $conn;
	$result=mysqli_query($conn, $query);
	$rows=[];
	while ($row =mysqli_fetch_assoc($result)) {
		# code...
		$rows[]=$row;
	}
	return $rows;
}

function pendaftaran($data){
	global $conn;

	$nama = strtolower(stripslashes($data["nama"]));
	$nik = stripcslashes($data["NIK"]);
	$email=strtolower(stripslashes($data["email"]));
	$password = mysqli_real_escape_string($conn,$data["password"]);
	$password2 =mysqli_real_escape_string($conn,$data["password2"]);

	//cek apakah nama yang dimasukkan sudah ada atau belum
	

	//cek password sama dengan konfirmasi password
	if ($password !== $password2) {
		# code...
		echo "<script>
               alert('Password anda tidak sesuai')
		</script>";
		return false;
	}

	//enkripsi password
	$password=password_hash($password,PASSWORD_DEFAULT);

	//masukkan user baru
	$query = "INSERT INTO akun VALUES ('','$nama','$nik','$email','$password')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}


 ?>