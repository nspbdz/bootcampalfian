<?php 
require_once 'koneksi.php';

	$id = $_GET['id'];
	$sql = "select categories.name as kategori, books.* from categories left join books on categories.id = books.categories_id where books.id = '$id'";
	$query = mysqli_query($konek, $sql);
	$ambil = mysqli_fetch_array($query);
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../7/bootstrap.min.css">
 	<title><?= $ambil['name']; ?></title>
 </head>
 <body>
 <div class="container-fluid">
 	<div class="jumbotron">
 	<div class="row">
 		<div class="col-lg-12">
 			<a href="index.php" class="btn btn-sm btn-primary">kembali</a>
 		</div>
 		<div class="col-lg-9">
 			<table>
 				<tr>
 					<th>Nama Buku : </th>
 					<th><?= $ambil['name']; ?></th>
 				</tr>
 				<tr>
 					<th>Kategori : </th>
 					<th><?= $ambil['kategori']; ?></th>
 				</tr>
 				<tr>
 					<th>Stok : </th>
 					<th><?= $ambil['stok']; ?></th>
 				</tr>
 				<tr>
 					<th>Deskripsi : </th>
 					<th><?= $ambil['deskripsi']; ?></th>
 				</tr>
 			</table>
 		</div>
 		<div class="col-lg-3">
 			<img class="card-img-top" src="../7/image/<?= $ambil['image']; ?>" />
 		</div>
 	</div>
 </div>
</div>
 </body>
 </html>