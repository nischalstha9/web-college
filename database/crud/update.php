<?php
include "database.php";
if (isset($_GET['id'])) {
    global $conn;
    $cus_id = $_GET['id'];
    $get_sql = $conn->prepare("SELECT * FROM customer WHERE customer_id=?");
    $get_sql->bind_param('i', $cus_id);
    $get_sql->execute();
    $res = $get_sql->get_result();
    $customer = null;
    $get_sql->close();
    if ($res->num_rows  > 0) {
        while ($row = $res->fetch_assoc()) {
            $customer = $row;
        }
    } else {
        Header("Location: ./index.php");
        exit();
    }
    if (isset($_POST['submitBtn'])) {
        $customer_name = $_POST['customer_name'];
        $contact_name = $_POST['contact_name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postal_code = $_POST['postal_code'];
        $country = $_POST['country'];
        $sql = $conn->prepare("UPDATE customer SET customer_name = ?, contact_name = ?, address = ?, city = ?, postal_code = ?, country=? WHERE customer_id = ?");
        $sql->bind_param(
            'ssssssi',
            $customer_name,
            $contact_name,
            $address,
            $city,
            $postal_code,
            $country,
            $cus_id
        );
        $sql->execute();
        if ($sql->affected_rows > 0) {
            header("Location: ./index.php");
        }
        $sql->close();
        exit();
    }
} else {
    Header("Location: ./index.php");
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Update Customer</title>
</head>

<body>
    <div class='container'>
        <h1>Update Customer</h1>
        <a href="./index.php">Back to List</a>
        <form action="./update.php?id=<?= $cus_id ?>" method="post">
            <label for="customer_name">Name:</label>
            <input required type="text" id="customer_name" name="customer_name" value="<?= $customer['customer_name'] ?>"><br>

            <label for="contact_name">Contact:</label>
            <input required type="number" id="contact_name" name="contact_name" value="<?= $customer['contact_name'] ?>"><br>

            <label for="address">address:</label>
            <input required type="text" id="address" name="address" value="<?= $customer['address'] ?>"><br>

            <label for="city">city:</label>
            <input required type="text" id="city" name="city" value="<?= $customer['city'] ?>"><br>

            <label for="postal_code">postal code:</label>
            <input required type="number" id="postal_code" name="postal_code" value="<?= $customer['postal_code'] ?>"><br>

            <label for="country">country:</label>
            <input required type="text" id="country" name="country" value="<?= $customer['country'] ?>"><br>

            <input required type="submit" value="Update" name="submitBtn" class="btn btn-primary"><br>


        </form>
    </div>
</body>

</html>