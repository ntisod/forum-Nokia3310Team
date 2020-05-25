<?php

$usermail = "BRUH";
$topic = '';
$content = '';
$errors = array();

$db = mysqli_connect('localhost', 'phpuser', 'test12345', 'nti-forum-db');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['post_user'])) {

    // få variablerna från formen
    $usermail = mysqli_real_escape_string($db, $usermail);
    $topic = mysqli_real_escape_string($db, $_POST['topic']);
    $content = mysqli_real_escape_string($db, $_POST['content']);
    $timenow = mysqli_real_escape_string($db, date("H:i:s") . " " . date("Y-m-d") . "<br>");
  
    // kolla om allt stämmer
    if (empty($topic)) { array_push($errors, "Topic krävs"); }
    if (empty($content)) { array_push($errors, "Meddelande krävs"); }
    

    if (count($errors) == 0) {
      $query = "INSERT INTO posts (useremail, topic, content, pubtime) 
            VALUES('$usermail', '$topic', '$content','$timenow')";
      mysqli_query($db, $query);
      header('location: index.php');
  }
}
