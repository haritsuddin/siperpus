
<?php 
include'../koneksi.php';
$id_anggota = $_GET['id_anggota'];

 $query=mysqli_query($kon,"DELETE FROM anggota WHERE id_anggota='$id_anggota'");

 echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";


 ?>