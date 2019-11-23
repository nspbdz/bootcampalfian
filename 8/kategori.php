<?php 
require_once 'koneksi.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../7/bootstrap.min.css">
	<title>Kategori</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<a href="tambahkat.php" class="btn btn-success">Tambah</a>
			<a href="index.php" class="btn btn-primary">Kembali</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Kategori</th>
					</tr>
				</thead>
				<tbody>
<?php
$no=1;
$sql = "select * from categories";
$query = mysqli_query($konek, $sql);
while ($tampil = mysqli_fetch_array($query)) {
?>
					<tr>
						<td>
							<?= $no; ?>
						</td>
						<td>
							<?= $tampil['name']; ?>
						</td>
					</tr>
<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>