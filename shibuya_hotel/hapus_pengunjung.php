<?php
include 'koneksi.php';

$id= $_GET['id'];
mysqli_query($koneksi,"delete from pengunjung where no_ktp='$id'");

header("location:pengunjung.php");
?>