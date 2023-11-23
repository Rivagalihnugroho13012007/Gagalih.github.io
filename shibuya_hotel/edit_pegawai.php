<link rel="stylesheet" href="hias.css">
<h3>Edit Data pegawai</h3>

<?php
include 'koneksi.php';
$id_pegawai = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_pegawai.php">
<table>
    <tr>
        <td>id_pegawai :</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>nama_pegawai :</td>
        <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
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