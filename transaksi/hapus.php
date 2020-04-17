<?php 
include '../koneksi.php';
$id=$_GET["id_pinjam"];
$query=mysqli_query($kon,"DELETE FROM detail_pinjam where id_pinjam='$id'");
$query=mysqli_query($kon,"DELETE FROM peminjaman where id_pinjam='$id'");
if(isset($query)){
    echo "<script>alert('data berhasil diubah.');window.location='index.php';</script>";
    exit;
}
else{
    echo "<script>alert('data berhasil diubah.');window.location='index.php';</script>";
    exit;
}
?>