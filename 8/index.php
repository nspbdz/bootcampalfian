<?php  
	$koneksi = mysqli_connect("localhost","root","","perpustakaan");
 
	// Check connection
	if( !$koneksi ){
	    die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}


	//ambil data dari tabel mahasiswa
	$tampil = "SELECT * FROM category";
	$result = mysqli_query($koneksi,$tampil);
	$tampil2= "SELECT * FROM books";
	$r 		= mysqli_query($koneksi,$tampil2);
	
	// $ctg 	= mysqli_fetch_assoc($result);
	// var_dump($ctg["id"]);
	 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="">
		<thead>
			<tr>
			<th colspan="2" align="center" ><a href="tambah.php">tambah</a></th>
			</tr>
			<tr>
			<th colspan="2" align="center" ><a href="kategori.php">tambah kategori</a></th>
			</tr>
			<tr>
				<th>
		<?php
				$select = "select categories.name as kategori, categories.id as id from categories";
				$query = mysqli_query($konek, $select);

				while ($tampil = mysqli_fetch_array($query)) {
				?>
				< <?= $tampil['kategori']; ?>
				<?php } ?>
			</th>
		</tr>
		</thead>
		<tbody>

			<?php while ( $row=mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?= $row['id'] ?></td>
				<td><?= $row['nama']?></td>
			</tr>
		<?php endwhile; ?>
		</tbody>
	</table>
	<br>
	<br>
	<table border="">
		<thead>
			<tr>
			<th colspan="5" align="center" >Daftar Buku</th>
				

			</tr>
			<tr>
				<th>image</th>
			</tr>
		</thead>
		<tbody>

			<?php while ( $r2=mysqli_fetch_assoc($r)) : ?>

</tr>
				  <td align="center"><?php echo "<img src='image/$data[foto]' width='70' height='90' />";?></td>
				  </tr>
				  <tr>
				<td><?= $r2['name']?></td>
				<td><?= $r2['stok']?></td>

			</tr>
			<tr>
				<td>
					<a href="">pinjam</a> |
					<a href="">kembalikan</a>
				</td>

			</tr>
		<?php endwhile; ?>

		</tbody>
	</table>



</body>
</html>
