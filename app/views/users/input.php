<h2>Input User</h2>

<form action="<?php echo URL; ?>/users/save" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>NOMOR HP</td>
            <td><input type="text" name="hp" required></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="pos" required></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="number" name="role" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td><input type="number" name="aktif" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>