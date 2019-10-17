<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <?php require '../templates/header.php'; ?>

    <?php
        // define variables and set to empty values
        $firstnameErr = $lastnameErr = $emailErr = $passwordErr = $passwordcheckErr = "";
        $firstname = $lastname = $email = $password = $passwordcheck = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["firstname"])) {
                $firstnameErr = "Förnamn är obligatoriskt";
            } else {
                $firstname = test_input($_POST["firstname"]);
                // check if name only contains letters and whitespace
                 if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                    $firstnameErr = "Använd bara bokstäver och mellanslag";
                 }
            }
            if (empty($_POST["lastname"])) {
                $lastnameErr = "Efternamn är obligatoriskt";
            } else {
                $lastname = test_input($_POST["lastname"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "E-postadress är obligatoriskt";
            } else {
                $email = test_input($_POST["email"]);
            }

            if (empty($_POST["password"])) {
                $passwordErr = "lösenord är obligatoriskt";
            } else {
                $password = test_input($_POST["password"]);
            }

            if (empty($_POST["passwordcheck"])) {
                $passwordcheckErr = "lösenord är obligatoriskt";
            } 
            else if ( $password !== $passwordcheck || $passwordcheck !== $password ) {
                $passwordcheckErr = "Skriv korrekt lösenord";
            }
            else {
                $passwordcheck = test_input($_POST["passwordcheck"]);
            }

            echo $firstname . "<br>";
            echo $lastname . "<br>";
            echo $email . "<br>";
            echo $password . "<br>";
            echo $passwordcheck . "<br>";
            
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>    

    <form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
        <fieldset>
            <legend>Personliga uppgifter</legend>
            <label for="firstname">Förnamn:</label><br>
            <input type="text" name="firstname" value="<?php echo $firstname;?>"><span class="error">*
            <?php echo $firstnameErr;?></span><br><br>

            <label for="lastname">Efternamn:</label><br>
            <input type="text" name="lastname" value="<?php echo $lastname;?>"><span class="error">*
            <?php echo $lastnameErr;?></span><br><br>

            <label for="email">E-post:</label><br>
            <input type="email" name="email" value="<?php echo $email;?>"><span class="error">*
            <?php echo $emailErr;?></span><br><br>  

            <label for="password">Lösenord:</label><br>
            <input type="text" name="password" value="<?php echo $password;?>"><span class="error">*
            <?php echo $password;?></span><br><br>  

            <label for="passwordcheck">Repetera lösenord:</label><br>
            <input type="text" name="passwordcheck" value="<?php echo $passwordcheck;?>"><span class="error">*
            <?php echo $passwordcheck;?></span><br><br>  

            <input type="submit" value="Registrera">
        </fieldset>
    </form>



    <?php require '../templates/footer.php'; ?>

</body>
</html>

