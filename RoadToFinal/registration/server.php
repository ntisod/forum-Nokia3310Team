<?php
session_start();

// initiera variabler
$username = "";
$email    = "";
$password_1 = "";
$password_2 = "";
$errors = array(); 



// kopplas till data bas, ändra sen!!!!!!
$db = mysqli_connect('localhost', 'phpuser', 'test12345', 'nti-forum-db');

// kollar om det finns koppling
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// Registrera användare
if (isset($_POST['reg_user'])) {

  // få variablerna från formen
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // kolla om allt stämmer
  if (empty($username)) { array_push($errors, "Namn krävs"); }
  if (empty($email)) { array_push($errors, "Email krävs"); }
  if (empty($password_1)) { array_push($errors, "Lösenord krävs"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Lösenord stämmer inte");
  }

  //Kollar om avnändare finns i databas
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // Om användare finns
    if ($user['username'] === $username) {
      array_push($errors, "Användarnamn existerar redan");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email existerar redan");
    }
  }

  
  if (count($errors) == 0) {
    $password_1 = password_hash($password_1, PASSWORD_DEFAULT); //encryptpar lösenord med bcrypt
    
  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Du är loggad in";
  	header('location: index.php');
  }
}

// Koden som loggar in användaren
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Användarenamn krävs");
    }
    if (empty($password)) {
        array_push($errors, "Lösenord krävs");
    }
  
    if (count($errors) == 0) {
        $querypass = "SELECT password FROM users WHERE username='$username'";

        $passresult = mysqli_query($db, $querypass);

        $fetchq = mysqli_fetch_array($passresult);

        $passwordnow = array_values($fetchq)[0];

        echo $passwordnow;

        $stripped = str_replace(' ', '', $passwordnow);

        $check =  password_verify($password, $stripped);

        if ($check){
        $query = "SELECT * FROM users WHERE username='$username'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Du är loggad in";
          header('location: index.php');
        }else {
            array_push($errors, "Fel användarnamn/lösenord kombination 1");
        }
         }else{
          array_push($errors, "Fel användarnamn/lösenord kombination 2");
         }
        }
      }
  
  ?>