<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'perpustakaan';

$konek = mysqli_connect($server,$username,$password,$database);

if (!$konek)  {
die  ("gagal terhubung ke database".mysqli_connect_error());
}
?>