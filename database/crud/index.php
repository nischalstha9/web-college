<?php
include "database.php";
global $conn;
$sql = $conn->prepare("SELECT * FROM customer");
$sql->execute();
$result = $sql->get_result();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers List</title>
</head>

<body>
    <h1>Customers List</h1>
    <a href="./insert.php">Create New Customer</a>
    <table border='1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Contact</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal Code</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td> <?= $row['customer_id'] ?> </td>
                    <td> <?= $row['customer_name'] ?> </td>
                    <td> <?= $row['contact_name'] ?> </td>
                    <td> <?= $row['address'] ?> </td>
                    <td> <?= $row['city'] ?> </td>
                    <td> <?= $row['postal_code'] ?> </td>
                    <td> <?= $row['country'] ?> </td>
                    <td><a href="./update.php?id=<?= $row['customer_id'] ?>">edit</a> | <a href="./delete.php?id=<?= $row['customer_id'] ?>">delete</a></td>
                </tr>
            <?php
            };
            ?>
        </tbody>
    </table>


    <?php
    $sql->close();
    ?>
</body>

</html>