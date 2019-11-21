<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../test/blank.css">
    <title>Inloggning</title>
</head>
<body>

<?php
    //OBS! Väldigt osäker sida. Inga kontroller här. De till att ha sådana i dina riktiga sidor.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Ange sessionsvariabel
        $_SESSION["user"]=$_POST["user"];
        //Skicka till session.php
        header("Location: session.php");
    }else{
        //Visa inloggningsformulär
        echo <<<HTML
            <form action="{$_SERVER['PHP_SELF']}" method="post">
                <label for="user">Ange ditt användarnamn:</label>
                <input type="text" name="user">
                <input type="submit" value="Logga in">
            </form>
HTML;
    }
?>

</body>
</html>