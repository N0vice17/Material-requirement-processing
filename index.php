<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "material_management";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM material";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Management System</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="navbar">
        Material Management System
    </div>
    <div class="parentdiv">
        <div class="material-available">
            <table>
                <tr>
                    <td>Name</td>
                    <td>Quantity</td>
                </tr>
                <tr>
                    <?php foreach ($result as $row) : ?>
                <tr>
                    <td><?php echo $row['Material_Name'] ?></td>
                    <td><?php echo $row['Material_Available'] ?></td>
                <tr>
                <?php endforeach; ?>
                </tr>
            </table>
        </div>
        <div class="forms">
            <form action="http://localhost:80/Host/index.php" method="POST">
                <input name="material-name" placeholder="Material Name"></input>
                <input name="material-amount" placeholder="Material Amount"></input>
                <button type="submit" name="add-material" class="validate">Add Material</button>
            </form>
            <form action="http://localhost:80/Host/index.php" method="POST">
                <input name="order-name" placeholder="Material Name"></input>
                <input name="order-amount" placeholder="Material Amount"></input>
                <button type="submit" name="process-order" class="validate">Process Order</button>
            </form>
        </div>
    </div>
</body>

</html>