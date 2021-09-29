<?php
include "database.php";

if (isset($_POST['submitBtn'])) {
    $customer_name = $_POST['customer_name'];
    $contact_name = $_POST['contact_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $country = $_POST['country'];
    global $conn;
    $sql = $conn->prepare("INSERT INTO customer (customer_name, contact_name, address, city, postal_code, country) VALUES (?,?,?,?,?,?)");
    $sql->bind_param(
        "ssssss",
        $customer_name,
        $contact_name,
        $address,
        $city,
        $postal_code,
        $country
    );
    $sql->execute();
    if ($sql->affected_rows !== 0) {
        header("Location: read.php");
    }
    $sql->close();
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Insert Customer</title>
</head>

<body>
    <div class='container'>
        <h1>Insert Customer</h1>
        <a href="./index.php">Back to List</a>
        <form action="./insert.php" method="post">
            <label for="customer_name">Name:</label>
            <input required type="text" id="customer_name" name="customer_name"><br>

            <label for="contact_name">Contact:</label>
            <input required type="number" id="contact_name" name="contact_name"><br>

            <label for="address">address:</label>
            <input required type="text" id="address" name="address"><br>

            <label for="city">city:</label>
            <input required type="text" id="city" name="city"><br>

            <label for="postal_code">postal code:</label>
            <input required type="number" id="postal_code" name="postal_code"><br>

            <label for="country">country:</label>
            <input required type="text" id="country" name="country"><br>

            <input required type="submit" value="Submit" name="submitBtn" class="btn btn-primary"><br>


        </form>
    </div>
</body>

</html>