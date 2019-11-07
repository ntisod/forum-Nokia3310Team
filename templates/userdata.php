<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../test/blank.css">
    <title>Userdata</title>
</head>
<form  class=" flex-container"  method="post">
        <fieldset>
            <legend>Personliga uppgifter</legend>
            <label for="firstname">Förnamn:</label><br>
            <input class="w3-input" type="text" name="firstname" value="<?php echo $firstname;?>"><span class="error">*
            <?php echo $firstnameErr;?></span><br><br>

            <label for="lastname">Efternamn:</label><br>
            <input class="w3-input" type="text" name="lastname" value="<?php echo $lastname;?>"><span class="error">*
            <?php echo $lastnameErr;?></span><br><br>

            <label for="email">E-post:</label><br>
            <input class="w3-input" type="email" name="email" value="<?php echo $email;?>"><span class="error">*
            <?php echo $emailErr;?></span><br><br>  

            <label for="password">Lösenord:</label><br>
            <input class="w3-input" type="text" name="password" value="<?php echo $password;?>"><span class="error">*
            <?php echo $passwordErr;?></span><br><br>  

            <label for="passwordcheck">Bekräfta lösenord:</label><br>
            <input class="w3-input" type="text" name="passwordcheck" value="<?php echo $passwordcheck;?>"><span class="error">*
            <?php echo $passwordcheckErr;?></span><br><br>  

            <input class="w3-input" type="submit" value="Registrera">
        </fieldset>
    </form>