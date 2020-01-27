<?php

$password = "Llöäåscenaårsden";

echo $password;

$algo = PASSWORD_BCRYPT;

$options = 'salt';

$crypopass = password_hash ( $password ,$algo, [$options] );

echo "<br />" , $crypopass;

$very = password_verify ($password , $crypopass );

if ($very){
    echo "<br />" , "stämmer";
} else{
    echo "<br />" ,"inte";
}