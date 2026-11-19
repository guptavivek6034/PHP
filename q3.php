<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $brand = $_POST['brand'];

    echo "Hello, $name. Your phone number is $phone and your preferred car brand is $brand.";

}
?>

<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Full Name:
    <input type="text" name="name">
    <br><br>

    Phone Number:
    <input type="text" name="phone">
    <br><br>

    Car Brand:
    <select name="brand">
        <option value="Toyota">Toyota</option>
        <option value="Ford">Ford</option>
        <option value="Tesla">Tesla</option>
    </select>
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>
