<link rel="stylesheet" href="hias.css">
<h3>Edit Data Reservasi</h3>

<?php
include 'koneksi.php';
$id_reservasi= $_GET['id_reservasi'];
$data = mysqli_query($koneksi,"SELECT * FROM reservasi_hotel WHERE id_reservasi='$id_reservasi'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_reservasi_hotel.php">
<table>
    <tr>
        <td>id_reservasi :</td>
        <td><input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi']; ?>"></td>
    </tr>
    <tr>
        <td>no_ktp :</td>
        <td><input type="text" name="no_ktp" value="<?php echo $tampil['no_ktp']; ?>"></td>
    </tr>
    <tr>
        <td>id_kamar :</td>
        <td><input type="text" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>id_pegawai :</td>
        <td><input type="text" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>check-in :</td>
        <td><input type="text" name="check_in" value="<?php echo $tampil['check_in']; ?>"></td>
    </tr>
    <tr>
        <td>check-out :</td>
        <td><input type="text" name="check_out" value="<?php echo $tampil['check_out']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>