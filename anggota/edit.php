<?php 
include '../koneksi.php';
include '../aset/header.php';

$id_anggota = $_GET['id_anggota'];

$query = mysqli_query($kon, " SELECT * FROM anggota INNER JOIN level on anggota.id_level=level.id_level where id_anggota ='$id_anggota'");

$anggota = mysqli_fetch_assoc($query);
 ?>
 
<div class="container">
	<div class="rom mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width: 100%";>
					<h2 class="card-title"><i class="fas fas fa-book"> </i> edit data anggota</h2>
				</div>
				<div class="card-body">
					<form action="proses-edit.php" method="post">
						
						<table class="table">
						<input type="hidden" name="id_anggota " value="<?= $anggota['id_anggota'];?>">
							<tr>
								<td>nama</td>
								<td><input  style="width:100%" type="text" name="nama" value="<?=  $anggota['nama'];?>" required></td>
							</tr>
							<tr>
								<td>kelas</td>
								<td><input style="width:100%" type="text" name="kelas" value="<?= $anggota['kelas'];?>" required></td>
							</tr>
							<tr>
								<td>telp</td>
								<td><input style="width:100%" type="text" name="telp" value="<?=  $anggota['telp'];?>" required></td>
							</tr>
								<td>username</td>
								<td><input style="width:100%" type="text" name="username" value="<?= $anggota['username'];?>" required></td>
							</tr>
							<tr>
								<td>password</td>
								<td><input style="width:100%" type="password" name="password" value="<?=  $anggota['password'];?>" required></td>
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