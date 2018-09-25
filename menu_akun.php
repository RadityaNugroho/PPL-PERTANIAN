<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php
include "database.php";
$query = mysqli_query($connection,"SELECT nama,email,NIK from akun where nik='$nik'");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <
            <th>Nama</th>
            <th>NIK</th>
            <th>E-mail</th>
            <th>Action</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["email"];?></td>
            <td><?php echo $data["NIK"];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>

</head>
<body>

</body>
</html>