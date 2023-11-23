<!DOCTYPE html>
<html>
<head></head>
	<title>Shibuya-Hotel</title>
    <link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
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

<table border="1" >
    <tr>
        <td>id_reservasi</td>
        <td>no_ktp</td>
        <td>id_kamar</td>
        <td>id_pegawai</td>
        <td>check-in</td>
        <td>check-out</td>  
        <td>AKSI</td>  

    </tr>

<?php
    include 'koneksi.php';
    $data=mysqli_query($koneksi,"select * from reservasi_hotel");
    while($tampil=mysqli_fetch_array($data)){ //ADA HTML DIDALAMNYA
?>

<tr>
    <td> <?php echo $tampil['id_reservasi'] ?> </td>
    <td> <?php echo $tampil['no_ktp'] ?> </td>
    <td> <?php echo $tampil['id_kamar'] ?> </td>
    <td> <?php echo $tampil['id_pegawai'] ?> </td>
    <td> <?php echo $tampil['check_in'] ?> </td>
    <td> <?php echo $tampil['check_out'] ?> </td>
    <td> <a href="hapus_reservasi_hotel.php?id_reservasi=<?php echo$tampil['id_reservasi']; ?>">Hapus</a>
         <a href="edit_reservasi_hotel.php?id_reservasi=<?php echo$tampil['id_reservasi']; ?>">Edit</a></td>
  

</tr>

<?php
    }
?>

</table>
<center>
<a href="input-reservasi.php">TAMBAHKAN DATA BARU</a>
</html>
</div>
</body>
</html>







