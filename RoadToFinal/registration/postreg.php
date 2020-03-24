<?php
session_start();

$usermail = $email;
$topic = "";
$content = "";

$db = mysqli_connect('localhost', 'phpuser', 'test12345', 'nti-forum-db');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }

