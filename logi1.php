﻿<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css" />
</head>
<header> 
</header>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
  
	if (mysqli_num_rows($result) == 1) {
	  $user = mysqli_fetch_assoc($result);
	
	  if ($user['type'] == 'admin') {
		header('location:admin/view.php');      
	  }else{
		header('location: ajouter.php');
	  }
	}else{
	  $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
  }
?>
<form class="box" action="" method="post" name="logi">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>