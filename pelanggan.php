<?php 
$conn = mysqli_connect("localhost","root","","db_laundry");
$result = mysqli_query($conn, "SELECT * FROM pelanggan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinta</title>
</head>
<body>
    <h1>Pelanggan</h1>
    <table border = "1" cellpading = "10" cellspacing= "0">
        <tr>
            <th>No. Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>No. Telephone</th>
            <th>Alamat</th>
        </tr>

        <?php $i=1; ?>
        <?php while ($plgn = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $plgn["nopel"]; ?></td>
            <td><?php echo $plgn["nama"]; ?></td>
            <td><?php echo $plgn["notelp"]; ?></td>
            <td><?php echo $plgn["alamat"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile ?>
    </table>

    
</body>
</html>