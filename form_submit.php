<?php
$username = "";
$password = "";
if (isset($_POST['username']) && ($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "Username: ".$username."";
    echo "</br>";
    echo "Password: ".$password."";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <h1>Login</h1>
    <hr>
    <form action="./form_submit.php" method="post" id='login' onsubmit="return validate()">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?= $username?>"required>
        <label for="password">Password:</label>
        <input type="password" name='password' id="password" value="<?= $password?>"required>
        <small id='password-error'></small>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <script>
        const validate = () => {
            var password = document.getElementById("password").value;
            console.log(password)
            if (password.length < 8){
                p_error = document.getElementById("password-error");
                p_error.innerHTML="Password length must be atleast 8.";
                return false;
            }else{
                return true;
            }
        }
    </script>

    
</body>
</html>