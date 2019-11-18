<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logga in</title>
</head>
<body>


<?php
    //test sida
    if ($_SESSION["REQUEST_METHOD"] == "POST"){
        //ange session
        $_SESSION["user"]=$_POST["user"];

        header("Location: session.php");

    }else{

        echo <<<HTML
            <form action="{&_SERVER['PHP_SELF']}" metdon="post">
            <label for="user">Ange ditt namn: </label>
            <input type="text" name="user">
            <input type="submit" value="logga in">


HTML;
    }
?>

<form action="session.php"></form>
    <label for="user">Ange ditt användarenamn: </label>
    <input type="text" name="user">
    <input type="submit" value="logga in">
</body>
</html>