<?php

$password = "123456";

echo $password;

$algo = PASSWORD_BCRYPT;

$crypopass = password_hash ( $password ,$algo);

echo "<br />" , $crypopass;

$very = password_verify ($password, $crypopass);

if ($very){
    echo "<br />" , "stämmer";
} else{
    echo "<br />" ,"inte";
}