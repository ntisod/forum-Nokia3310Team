<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registreringssida</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
  <div class="header">
  	<h2>Registrera</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Användare namn</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Lösenord</label>
  	  <input type="password" name="password_1" value="<?php echo $password_1; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Bekräfta lösenord</label>
  	  <input type="password" name="password_2" value="<?php echo $password_2; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Om du har konto:  <a href="login.php">logga in</a>
  	</p>
  </form>
</body>
</html>