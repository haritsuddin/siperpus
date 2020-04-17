<?php 
include '../koneksi.php' ;

$sql = "SELECT * FROM buku ORDER BY judul";

$res = mysqli_query($kon,$sql);

$pinjam = array();

while($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}		
?>


<?php 
include '../aset/header.php';
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<h2 class="card-title"><i class="fas fa-edit"></i> Data buku <a href="tambah.php"><button type="button" class="btn btn-outline-info">
    <i class="fas fa-plus"></i></button></a></h2>
	</div>
	<div class="card-body">
		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">judul</th>
      <th scope="col">pengarang</th>
      <th scope="col">stok</th>
      <th scope="col">aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach($pinjam as $p){
     ?>
    
    <tr>
    	<th scope="row"><?= $no ?></th>
    	<td><?= $p['judul'];?></td>
    	<td><?= $p['pengarang'];?></td>
    	<td><?= $p['stok'];?></td>
    	<td>
    	<a href="detail.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-success">detail</a>
    	<a href="edit.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-warning">edit</a>
    	<a href="hapus.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-danger">hapus</a>	
     
    	</td>
    </tr>

<?php 
$no++;
}

 ?>     
  </tbody>
</table>
	</div>
</div>

<?php 
include '../aset/footer.php';
?>