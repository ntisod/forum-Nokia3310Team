<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../test/blank.css">
    <title>Welcome</title>
</head>
<body>
<?php require '../templates/header.php'; ?>

    <div class="w3-display-middle">
        <?php

        if (!$err){

            date_default_timezone_set("Europe/Stockholm");

            $myfile = fopen("information.txt", "a+");

            fwrite($myfile, date("Y-m-d H:i:s") . "\t" . $firstname . "\t" . $email . "\t" . $lastname . "\t" . $password . "\t");

            fclose($myfile);
            
            echo "<h1> Välkommen </h1>";
            echo "Namn: " . $firstname . "<br>";
            echo "Efternamn: " . $lastname . "<br>";
            echo "Email addres: " . $email . "<br>";
            echo "Lösenord: " . $password . "<br>";
        }else{
            require '../templates/login.php';
        }
                ?>
    </div>

<?php require '../templates/footer.php'; ?>
</body>
</html>