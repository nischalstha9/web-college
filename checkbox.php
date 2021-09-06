<!DOCTYPE html>
<html lang="en">
<head>
    <title>Selection Form Methods</title>
</head>
<body>
    <form action="./checkbox.php" method="get">
        <h4>Select your vehicles</h4>
        <input id="vehicle1" value="Car" name="vehicle" type="checkbox">Car</input>
        <input id="vehicle2" value="Bike" name="vehicle" type="checkbox">bike</input>
        <input id="vehicle3" value="Bus" name="vehicle" type="checkbox">bus</input>
        <input id="vehicle4" value="Truck" name="vehicle" type="checkbox">truck</input>
        <br>
        <h4>Select your gender</h4>
        <input id="gender1" value="male" name="gender" type="radio">male</input>
        <input id="gender2" value="female" name="gender" type="radio">female</input>
        <input id="gender3" value="other" name="gender" type="radio">other</input>
        <input id="gender4" value="no-information" name="gender" type="radio">no-information</input>
        <br>
        <label for="country">Select Your Country</label>
        <select name="country" id="country">
            <option value="Nepal">Nepal</option>
            <option value="USA">USA</option>
            <option value="India">India</option>
            <option value="China">China</option>
        </select>
        <br>

        <label for="country-multiple">Select Your Country-multiple</label>
        <select name="country-multiple" id="country-multiple" multiple>
            <option value="Nepal">Nepal</option>
            <option value="USA">USA</option>
            <option value="India">India</option>
            <option value="China">China</option>
        </select>
        <br>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>