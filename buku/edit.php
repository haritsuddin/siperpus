<?php 
include '../koneksi.php';
include '../aset/header.php';

$id_buku = $_GET['id_buku'];

$query = mysqli_query($kon, " SELECT * FROM buku INNER JOIN kategori on buku.id_kategori=kategori.id_kategori where id_buku ='$id_buku'");

$buku = mysqli_fetch_assoc($query);
 ?>
 
<div class="container">
	<div class="rom mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width: 100%";>
					<h2 class="card-title"><i class="fas fas fa-book"> </i> edit data buku</h2>
				</div>
				<div class="card-body">
					<form action="proses-edit.php" method="post">
						
						<table class="table">
						<input type="hidden" name="id_buku " value="<?= $buku['id_buku'];?>">
							<tr>
								<td>judul</td>
								<td><input  style="width:100%" type="text" name="judul" value="<?=  $buku['judul'];?>" required></td>
							</tr>
							<tr>
								<td>penerbit</td>
								<td><input style="width:100%" type="text" name="penerbit" value="<?= $buku['penerbit'];?>" required></td>
							</tr>
							<tr>
								<td>pengarang</td>
								<td><input style="width:100%" type="text" name="pengarang" value="<?=  $buku['pengarang'];?>" required></td>
							</tr>
							<tr>
								<td>Ringkasan</td>
								<td style="">
									<textarea style="width:100% ; height: 100px" value="<?= $buku['ringkasan'];?>" type="textarea"
									 name="ringkasan" required>
									 <?=  $buku['ringkasan'];?>
										
									</textarea>
								</td>
							<tr>
								<td>cover</td>
								<td><input style="width:100%" type="file" name="cover" value="<?= $buku['cover'];?>" required></td>
							</tr>
							
							<tr>
								<td>stok</td>
								<td><input style="width:100%" type="number" name="stok" value="<?=  $buku['stok'];?>" required></td>
							</tr>
							<tr>
								<td>kategori</td>
								<td>
									<select style="width:100%" name="id_kategori" required>

										 <option> pilih kategori</option>
										 <?php 
										 $querry = mysqli_query($kon,"SELECT * FROM kategori");
										 while($e = mysqli_fetch_assoc($querry)){
										 	?>
										 <option value="<?= $e['id_kategori']; ?>"><?= $e['kategori']; ?></option>
										  <?php 
										  } ?>
									</select>
								</td>
							</tr>
							<tr>
							<th></th>
							<th><button style="width:100%;height:70px" type="submit" class="btn btn-primary" name="simpan">edit</button></th>
							</tr>
					</table></form>
				</div></div></div></div></div>
 <?php 
include '../aset/footer.php';
  ?>