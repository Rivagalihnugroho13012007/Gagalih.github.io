<link rel="stylesheet" href="style2.css">

<h3>TAMBAHKAN DATA KAMAR</h3>
    <form method="post" action="input-aksi-kamar.php">
        <table>
            <tr>
                <td>id_kamar</td>
                <td><input type="text" name="id_kamar"></td>
            </tr>
            <tr>
                <td><label for="tipe_kamar">tipe_kamar</label></td>
                <td>
                    <select name="tipe_kamar" id="tipe_kamar">
                        <option value="Reguler">Reguler</option>
                        <option value="VIP">VIP</option>
                        <option value="President">President</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>