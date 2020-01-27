<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>NTI Forum</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Användare namn</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Lösenord</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
      Inte medlem ännu? <a href="register.php">Bli Medlem</a>
  	</p>
  </form>
</body>
</html>