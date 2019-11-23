<?php

require_once 'koneksi.php';


if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$nama = $_POST['name'];

	$sql = "update categories set name='$nama' where id='$id'";
	$query = mysqli_query($konek, $sql);

	if ($query) {
		header('location:kategori.php');
	}
}


 ?>