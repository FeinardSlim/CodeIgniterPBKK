<form method="post" name="frmAdd" action="<?php echo site_url('studentController/store'); ?>">
    <table align="center">
        <tr>
            <td colspan="2" align="center">Add Record</td>
        </tr>
        <tr>
            <td>NRP</td>
            <td><input type="text" name="nrp"> </td>
        </tr>

        <tr>
            <td>nama</td>
            <td><input type="text" name="nama"> </td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td><input type="text" name="jurusan"> </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="alamat" rows="4" cols="16"></textarea> </td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td><input type="text" name="no_hp"> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"> </td>
        </tr>
    </table>
</form>