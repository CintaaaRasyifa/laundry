<?php 
$conn = mysqli_connect("localhost","root","","db_laundry");
$result = mysqli_query($conn, "SELECT * FROM pakaian");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cintaaa XI RPL 1</title>
</head>
<body>
    <h1>Pakaian</h1>
    <table border = "1" cellpading = "10" cellspacing= "0">
        <tr>
            <th>Kode Pakaian</th>
            <th>Nama Pakaian</th>
        </tr>

        <?php $i=1; ?>
        <?php while ($pkn = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $pkn["kode"]; ?></td>
            <td><?php echo $pkn["nama"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile ?>
    </table>

    
</body>
</html>