<?php 
include '../aset/header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<form action="proses-tambah.php" method="post">
<table>
	<div class="container">
	<div class="rom mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width:100%;">
				<div class="card-header" style="width: 100%;">
					<h2 class="card-title"><i class="fas fas fa-book"> </i> tambah data siswa</h2>	
				</div>
				<div class="card-body">

				<form action="proses-tambah.php" method="post">

						<table>
							<tr>
								<td>nama</td>
								<td><input type="text" name="nama"></td>
							</tr>
							<tr>
								<td>kelas</td>
								<td><input type="text" name="kelas"></td>
							</tr>
							<tr>
								<td>no telp</td>
								<td><input type="text" name="telp"></td>
							</tr>
							<tr>
								<td>username</td>
								<td><input type="text" name="username"></td>
							</tr>
							
							<tr>
								<td>password</td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
							<th></th>
							<th><input type="submit" class="btn btn-primary" name="simpan" value="simpan"></th>
							</tr>
						</table>
						</form>
						</div></div></div></div></div></body></html>		
</form>
</center>
</body>
</html>

<?php 
include '../aset/footer.php';
?>