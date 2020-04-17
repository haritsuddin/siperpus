<?php 
include '../koneksi.php';
if (isset($_POST['simpan'])){
	$id_anggota			= $_POST['id_anggota'];
	$nama 				= $_POST['nama'];
	$kelas 	 			= $_POST['kelas'];
	$telp  				= $_POST['telp'];
	$username     		= $_POST['username'];
	$password 			= $_POST['password'];
	

	

	$sql = "UPDATE anggota SET nama='$nama',kelas='$kelas',telp='$telp',username='$username',password='$password' WHERE id_anggota='$id_anggota'";

	$res = mysqli_query($kon,$sql);
	$count = mysqli_affected_rows($kon);

	if($count){
		 echo "<script>alert('data berhasil diubah.');window.location='index.php';</script>";
	}
}else{
	 echo "<script>alert('data berhasil diubah.');window.location='edit.php';</script>";
	}
if(isset($_POST["kembali"])){
	 echo "<script>alert('data berhasil diubah.');window.location='index.php';</script>";
	}

 ?>
