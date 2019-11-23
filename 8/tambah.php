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
			<form role="form" method="POST" action="../7/proses-buku.php" enctype="multipart/form-data">
				<div class="form-group">
 
					<label>
						Kategori
					</label>
					<select class="form-control" name="kategori">
						<option>---------</option>
					<?php
				$select = "select * from categories";
				$query = mysqli_query($konek, $select);
				while ($tampil = mysqli_fetch_array($query)) {
				?>
				<option value="<?= $tampil['id']; ?>"><?= $tampil['name']; ?></option>
			<?php } ?>
		</select>
				</div>
				<div class="form-group">
 
					<label>
						Nama Buku
					</label>
					<input type="text" name="name" class="form-control"/>
				</div>
				<div class="form-group">
					 
					<label>
						stok
					</label>
					<input type="text" class="form-control" name="stok" />
				</div>
				<div class="form-group">
					 
					<label>
						Deskripsi
					</label>
					<textarea name="deskripsi" class="form-control"></textarea>
				</div>
				<div class="form-group">
					 
					<label>
						Foto
					</label>
					<input type="file" class="form-control-file" name="foto" />
					<p class="help-block">
						masukkan foto
					</p>
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