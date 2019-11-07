<?php

$cookie_name = "user";
$cookie_value = "Bob Broom";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>
<body>

<?php
    if(!isset($_COOKIE[$cookie_name])){
        //om kakan finns inte
        echo "Kakan som heter '" . $cookie_name . "' finns inte.";
    }else{
        //om den finns
        echo "Kakan som heter '" . $cookie_name . "' finns.";
        echo "Värdet är " . $_COOKIE[$cookie_name];
    }
?>

</body>
</html>
