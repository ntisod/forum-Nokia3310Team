<?php 
include("postreg.php");
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "Du måste logga in först";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>NTI Forum</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php require 'header.php'; ?>

<body>
  <div class="header">
  	<h2>Inlägg</h2>
  </div>

<form method="post" action="post.php"  accept-charset="utf-8">
    <h3>Topic<br><input name="topic" type="text"></h3>
    <p>Meddelande<br><textarea name="content" type="text" rows="5" cols="50"></textarea></p>
    <p><input type="submit"  name="post_user"></p>
</form>

<?php require 'footer.php'; ?>

<?php
/*
echo '
    <div class="w3-row w3-padding-10">
      <div class="w3-twothird w3-container">
        <h1 class="w3-text-teal">' . $topic . '</h1>
        <h2 class="w3-small w3-text-grey">' . $username . '</h2>
        <p>' . $message . '</p>
      </div>
      <div class="w3-third w3-container">
      </div>
    </div>'
    */

?>