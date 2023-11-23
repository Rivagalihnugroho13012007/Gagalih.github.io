<!DOCTYPE html>
<html>
<head></head>
	<title>Shibuya-Hotel</title>
    <link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="utama">
	<div class="navbar">
		<label class="logo"> Shibuya-Hotel</label>
		<ul>
            <li><a href="dasboard.html">Home</a></li>
			<li><a href="reservasi.php">Reservasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="pegawai.php">Pegawai</a></li>
			<li><a href="pengunjung.php">Pengunjung</a></li>
		</ul>
	</div>
	<html>
        <center>

<table border="1">
    <tr>
        <td>no_ktp</td>
        <td>nama_pengunjung</td>
        <td>telepon</td>
        <td>alamat</td>
        <td>AKSI</td>  

    </tr>

<?php
    include 'koneksi.php';
    $data=mysqli_query($koneksi,"select * from pengunjung");
    while($tampil=mysqli_fetch_array($data)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['no_ktp'] ?> </td>
    <td> <?php echo $tampil['nama_pengunjung'] ?> </td>
    <td> <?php echo $tampil['telepon'] ?> </td>
    <td> <?php echo $tampil['alamat'] ?> </td>
    <td> <a href="hapus_pengunjung.php?id=<?php echo$tampil['no_ktp']; ?>">Hapus</a>
         <a href="edit_pengunjung.php?id=<?php echo$tampil['no_ktp']; ?>">Edit</a></td>
  

</tr>

<?php
    }
?>

</table>
<center>
<a href="input-pengunjung.php">TAMBAHKAN DATA BARU</a>
</html>
</div>
</body>
</html>






