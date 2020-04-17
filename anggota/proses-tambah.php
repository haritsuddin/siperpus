<?php 
include '../koneksi.php';
if (isset($_POST['simpan'])){

	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$telp = $_POST['telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_level = 3;

	$sql = "INSERT INTO anggota (nama, kelas, telp, username, password, id_level)
			VALUES ('$nama','$kelas','$telp','$username','$password',$id_level)";

	$res = mysqli_query($kon,$sql);

	$count = mysqli_affected_rows($kon);

	
	if($res>0){
echo "<script>alert('data berhasil diedit.');window.location='index.php';</script>";

	}
}
 ?>



