<form method="post" name="frmEdit" action="<?php echo base_url('StudentController/update'); ?>">
    <table align="center">
        <tr>
            <td colspan="2" align="center">Edit Record</td>
        </tr>
        <input type="hidden" name="nrp" class="form-control" id="nrp" value="<?php echo $student['nrp'] ?>">
        <tr>
            <td>First Name</td>
            <td><input type="text" name="nama" value="<?php echo $student['nama']; ?>"> </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="jurusan" value="<?php echo $student['jurusan']; ?>"> </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="alamat" rows="4" cols="16"><?php echo $student['alamat']; ?></textarea> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="no_hp" value="<?php echo $student['no_hp']; ?>"> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
        </tr>
    </table>
</form>