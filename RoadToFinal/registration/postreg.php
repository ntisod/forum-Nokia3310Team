<?php

$usermail = 'fuck@that.com';
$topic = "";
$content = "";
$errors = array();

$db = mysqli_connect('localhost', 'phpuser', 'test12345', 'nti-forum-db');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_POST['post_user'])) {

    // få variablerna från formen
    $topic = mysqli_real_escape_string($db, $_POST['topic']);
    $content = mysqli_real_escape_string($db, $_POST['content']);
    $timenow = date("H:i:s") . " " . date("Y-m-d") . "<br>";
  
    // kolla om allt stämmer
    if (empty($topic)) { array_push($errors, "Topic krävs"); }
    if (empty($content)) { array_push($errors, "Meddelande krävs"); }
    

    if (count($errors) == 0) {      
      $query = "INSERT INTO posts (useremail, topic, content) 
            VALUES('$usermail', '$topic', '$content')";
      mysqli_query($db, $query);
      header('location: index.php');
    }
  }