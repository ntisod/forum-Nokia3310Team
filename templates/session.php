<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
    <?php
    //kolla om du är inloggad
    if(isset(&_SESSION['user'])){
        //Om inloggad 
        echo "<h1>Du är inloggad</h1>";
        //Möjlighet att logga ut om inloggad
        echo "<p><a href='logout.php'</a></p>";
        
    }else{
        //Om inte inloggad
        echo "<h1>Du är inte inloggad</h1>";
        // Möjlighetet att logga in eller registrera sig
        echo "<p><a href='login.php'</a></p>";
    ?>
</body>
</html>