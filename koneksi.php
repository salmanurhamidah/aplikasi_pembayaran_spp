<?php 
$koneksi = mysqli_connect('localhost','root','','db_spp');
if (!$koneksi) {
 	echo"Koneksi Anda Gagal";
 }
?>