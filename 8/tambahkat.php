<?php 
require_once 'koneksi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../7/bootstrap.min.css">
	<title>Tambah Buku</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col"><a href="../7/index.php" class="btn btn-primary">kembali</a></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form role="form" method="POST" action="prosestambahkat.php">
				<div class="form-group">
 
					<label>
						Kategori Buku
					</label>
					<input type="text" name="name" class="form-control"/>
				</div>
				<button type="submit" class="btn btn-primary" name="submit">
					kirim
				</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>