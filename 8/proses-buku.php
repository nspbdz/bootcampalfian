<?php 
require_once 'koneksi.php';

if (isset($_POST['submit'])) {

	// ambil data file
$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../7/image/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

	$kat = $_POST['kategori'];
	$nama = $_POST['nama'];
	$stok = $_POST['stok'];
	$desc = $_POST['deskripsi'];

	$sql = "insert into books (name,stok,image,deskripsi,categories_id) value ('$nama','$stok','$namaFile','$desc','$kat')";
	$query = mysqli_query($konek, $sql);

	if ($query) {
		header('location:index.php');
	}
}
 ?>