<?php
$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
    if ($_POST["user"] === "Osama") {

        echo "This Username " . $_POST['user'] . " Is Admin" . "<br>";
    }

    if ($_POST["user"] === "Ahmed") {

        echo "This Username " . $_POST['user'] . " Is Admin" . "<br>";
    }

    if ($_POST["user"] === "Sayed") {

        echo "This Username " . $_POST['user'] . " Is Admin" . "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>
</body>

</html>
