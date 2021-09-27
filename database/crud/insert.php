<?php
include "database.php";

if (isset($_POST['submitBtn'])) {
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $country = $_POST['country'];
    global $conn;
    $sql = $conn->prepare("INSERT INTO customer (username, contact, address, city, postal_code, country) VALUES (?,?,?,?,?,?)");
    $sql->bind_param(
        "sissis",
        $username,
        $contact,
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Insert Customer</title>
</head>

<body>
    <div class='container'>
        <h1>Insert Customer</h1>
        <form action="./insert.php" method="post">
            <label for="username">Username:</label>
            <input required type="text" id="username" name="username">

            <label for="contact">contact:</label>
            <input required type="number" id="contact" name="contact">

            <label for="address">address:</label>
            <input required type="text" id="address" name="address">

            <label for="city">city:</label>
            <input required type="text" id="city" name="city">

            <label for="postal_code">postal_code:</label>
            <input required type="number" id="postal_code" name="postal_code">

            <label for="country">country:</label>
            <input required type="text" id="country" name="country">

            <input required type="submit" value="Submit" name="submitBtn" class="btn btn-primary">


        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>