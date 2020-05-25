<?php

$useremail = '';
$comment = '';
$errors = array();

$db = mysqli_connect('localhost', 'phpuser', 'test12345', 'nti-forum-db');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['cpost_user'])) {

    // få variablerna från formen
    $useremail = mysqli_real_escape_string($db, $useremail);
    $topic = mysqli_real_escape_string($db, $_POST['comment']);
    $ctime= mysqli_real_escape_string($db, date("H:i:s") . " " . date("Y-m-d") . "<br>");
  
    // kolla om allt stämmer
    if (empty($topic)) { array_push($errors, "Topic krävs"); }
    if (empty($content)) { array_push($errors, "Meddelande krävs"); }
    

    if (count($errors) == 0) {
      $query = "INSERT INTO comment (useremail, comment, ctime) 
            VALUES('$usermail', '$comment', '$ctime')";
      mysqli_query($db, $query);
      header('location: index.php');
  }
}