<?php
include 'koneksi.php';

$id= $_GET['id_reservasi'];
mysqli_query($koneksi,"delete from reservasi_hotel where id_reservasi='$id'");

header("location:reservasi.php");
?>