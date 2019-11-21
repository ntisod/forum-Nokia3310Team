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
    <title>huvudsida</title>
</head>
<body>

<?php
    //Kolla om du är inloggad
    if(isset($_SESSION['user'])){
        //Om inloggad
        echo "<h1>Du är inloggad som {$_SESSION['user']} </h1>";
        //Möjlighet att logga ut
        echo "<p><a href='logout.php'>Logga ut</a></p>";
    }else{
        //Om inte inloggad
        echo "<h1>Du är inte inloggad</h1>";
        //Möjlighet att logga in eller registrera sig
        echo "<p><a href='login.php'>Logga in</a></p>";
    }
?>
</body>
</html>