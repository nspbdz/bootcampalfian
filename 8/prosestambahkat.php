<?php 
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$nama = $_POST['name'];

	$sql = "insert into categories (name) value ('$nama')";
	$query = mysqli_query($konek, $sql);

	if ($query) {
		header('location:kategori.php');
	}else {
		echo 'error';
	}
}


 ?>