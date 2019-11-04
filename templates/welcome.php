<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../test/blank.css">
    <title>Welcome</title>
</head>
<body>
<?php require '../templates/header.php'; ?>

<?php

if (!err){

    date_default_timezone_set("Europe/Stockholm");

    echo "<h1>Välkommen {$email}!</h1>\n";

    echo "<p>Du skapade kontot " . date("Y-m-d H:i:s") . "</p>";
}else{
    require '../templates/login.php';
}
        ?>

<?php require '../templates/footer.php'; ?>
</body>
</html>