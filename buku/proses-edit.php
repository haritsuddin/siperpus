<?php 
include '../koneksi.php';
if (isset($_POST['simpan'])){
	$id_buku			= $_POST['id_buku'];
	$judul 				= $_POST['judul'];
	$penerbit 	 		= $_POST['penerbit'];
	$pengarang  		= $_POST['pengarang'];
	$ringkasan     		= $_POST['ringkasan'];
	$cover 				= $_POST['cover'];
	$stok 				= $_POST['stok'];
	$id_kategori		= $_POST['id_kategori'];

	

	$sql = "UPDATE buku SET judul='$judul',penerbit='$penerbit',pengarang='$pengarang',ringkasan='$ringkasan',cover='$cover',stok='$stok',
							id_kategori='$id_kategori'
							WHERE id_buku=$id_buku";

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
