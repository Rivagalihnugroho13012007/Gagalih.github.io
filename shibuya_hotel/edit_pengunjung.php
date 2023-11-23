<link rel="stylesheet" href="hias.css">
<h3>Edit Data pengunjung</h3>

<?php
include 'koneksi.php';
$no_ktp = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM pengunjung WHERE no_ktp='$no_ktp'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_pengunjung.php">
<table>
    <tr>
        <td>no_ktp :</td>
        <td><input type="number" name="no_ktp" value="<?php echo $tampil['no_ktp']; ?>"></td>
    </tr>
    <tr>
        <td>nama_pengunjung :</td>
        <td><input type="text" name="nama_pengunjung" value="<?php echo $tampil['nama_pengunjung']; ?>"></td>
    </tr>
    <tr>
        <td>telepon :</td>
        <td><input type="text" name="telepon" value="<?php echo $tampil['telepon']; ?>"></td>
    </tr>
    <tr>
        <td>alamat :</td>
        <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>