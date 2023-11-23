<?php
include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"insert into pegawai values('$id_pegawai','$nama','$telepon','$alamat')");
header("location:pegawai.php");
?>