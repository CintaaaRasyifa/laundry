<?php 
$conn = mysqli_connect("localhost","root","","db_laundry");
$result = mysqli_query($conn, "SELECT * FROM melaundry");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry by Rasya Sasikirana</title>
</head>
<body>
    <h1>Melaundry</h1>
    <table border = "1" cellpading = "10" cellspacing= "0">
        <tr>
            <th>No. Order</th>
            <th>Tanggal Order</th>
            <th>Tanggal Selesai</th>
            <th>Berat (kg)</th>
            <th>total</th>
        </tr>

        <?php $i=1; ?>
        <?php while ($order = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $order["no"]; ?></td>
            <td><?php echo $order["tanggal"]; ?></td>
            <td><?php echo $order["selesai"]; ?></td>
            <td><?php echo $order["berat"]; ?></td>
            <td><?php echo $order["total"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile ?>
    </table>

    
</body>
</html>