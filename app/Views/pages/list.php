<html>

<head>
    <title>Codeigniter 4 CRUD (Create Read Update Delete) Tutorial For Beginners - XpertPhp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td colspan="5" align="right"> <a href="<?php echo site_url('students/create') ?>"> Add </a>
            </td>
        </tr>

        <tr>
            <td> nrp </td>
            <td> nama </td>
            <td> Alamat </td>
            <td> no telp</td>
            <td> jurusan </td>
            <td> Action </td>
        </tr>
        <?php
        foreach ($students_detail as $sd) {
        ?>
            <tr>
                <td> <?php echo $sd['nrp']; ?> </td>
                <td> <?php echo $sd['nama']; ?> </td>
                <td> <?php echo $sd['alamat']; ?> </td>
                <td> <?php echo $sd['no_hp']; ?> </td>
                <td> <?php echo $sd['jurusan']; ?> </td>
                <td>
                    <a href="<?php echo base_url(); ?>/students/edit/<?php echo $sd['nrp']; ?>"> Edit </a>&nbsp;<a href="<?php echo base_url(); ?>/students/delete/<?php echo $sd['nrp']; ?> ">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>