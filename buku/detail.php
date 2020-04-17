<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori where id_buku = '$id_buku'";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Buku</h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td><strong>Cover</strong></td>
						<td><?php echo "<img src='$detail[cover]' ?>";?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Judul</strong></td>
						<td width="500px"><?= $detail['judul'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Penerbit</strong></td>
						<td width="500px"><?= $detail['penerbit'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Pengarang</strong></td>
						<td width="500px"><?= $detail['pengarang'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Ringkasan</strong></td>
						<td width="500px"><?= $detail['ringkasan'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Stok</strong></td>
						<td width="500px"><?= $detail['stok'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Kategori</strong></td>
						<td width="500px"><?= $detail['kategori'] ?></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a href="edit.php?id_buku=<?php echo $detail['id_buku']; ?>" class="badge badge-warning">edit</a>
    						<a href="hapus.php?id_buku=<?php echo $detail['id_buku']; ?>" class="badge badge-danger">hapus</a>	
						</td>
					</tr>
				</table>
				</th></tr></table>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>