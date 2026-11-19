<?php

if (isset($_GET["username"])) {

    $username = $_GET["username"];

    $status = isset($_GET["terms"]) ? "Agreed" : "Not Agreed";

    echo "Welcome, $username. You have $status to the terms and conditions.";

}

?>

<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<form method="GET">

    Username:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="pass" required>
    <br><br>

    Are you agree to terms and conditions?
    <input type="checkbox" name="terms">
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>
