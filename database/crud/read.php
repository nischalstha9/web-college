<?php
include "database.php";
global $conn;
$sql = $conn->prepare("SELECT * FROM customer");
$sql->execute();
$result = $sql->get_result();
echo "<table border='1'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Contact</th>
            <th>Address</th>
            <th>City</th>
            <th>Postal Code</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
";
while ($row = $result->fetch_assoc()) {
?>
    <tr>
        <td> <?= $row['id'] ?> </td>
        <td> <?= $row['username'] ?> </td>
        <td> <?= $row['contact'] ?> </td>
        <td> <?= $row['address'] ?> </td>
        <td> <?= $row['city'] ?> </td>
        <td> <?= $row['postal_code'] ?> </td>
        <td> <?= $row['country'] ?> </td>
    </tr>
<?php
};
echo "</tbody></table>";
$sql->close();
?>