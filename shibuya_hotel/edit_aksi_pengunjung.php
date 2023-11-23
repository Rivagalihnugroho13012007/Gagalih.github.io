<?php
include 'koneksi.php';

$no_ktp = $_POST['no_ktp'];
$nama_pengunjung = $_POST['nama_pengunjung'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"UPDATE pengunjung SET no_ktp='$no_ktp', nama_pengunjung='$nama_pengunjung',
telepon='$telepon',alamat='$alamat' WHERE no_ktp='$no_ktp'");
header("location: pengunjung.php"); 

?>