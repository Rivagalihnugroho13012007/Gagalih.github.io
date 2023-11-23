<?php
include 'koneksi.php';

$no_ktp = $_POST['no_ktp'];
$nama_pengunjung = $_POST['nama_pengunjung'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"insert into pengunjung values('$no_ktp','$nama_pengunjung','$telepon','$alamat')");
header("location:pengunjung.php");
?>