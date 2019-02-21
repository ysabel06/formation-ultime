<?php
if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])
&& !empty($_POST['password_confirm'])){
	//Variables
  $pseudo       = $_POST['pseudo'];
  $email        = $_POST['email'];
  $password     = $_POST['password'];
  $pass_confirm = $_POST['password_confirm']; 

  //test si password= password_confirm
  if ($password != $password_confirm) {
    	header('location: ../?error=1&pass=1');
    }  
   
}
?> 
<!DOCTYPE html> 
<html>
<head>
	<link rel="stylesheet" type="text/css" href="default.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Playfair+Display|Shadows+Into+Light" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet"> 
	<title>Inscription</title>
</head>
<body>
	<header>
	<h1>Inscription</h1>
	</header>
	<div class="container">
	<p id="info">Bienvenue sur mon Blog,pour en savoir plus,inscrivez-vous.Sinon,<br><a href="connection.php">Connectez-vous</a></p>

	     <?php
	          if(isset($_GET['error'])){

	          	if(isset($_GET['pass'])){
	          		echo' <p id="error">Les mots de passe ne sont pas identique.</p>';
	          	}
	          }
	     ?>




    <div id="form">
	<form method="post" action="index.php">
		<table>
			<tr>
				<td>Pseudo</td>
				<td><input type="text" name="pseudo" placeholder="Ex:Ysabel"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="Ex:google@.com"></td>
			</tr>
			<tr>
				<td>Mot de passe</td>
				<td><input type="password" name="password" placeholder="*****"></td>
			</tr>
			<tr>
				<td>Retaper mot de passe(Confirmer)</td>
				<td><input type="password" name="password_confirm" placeholder="*****"></td>
			</tr>
			
	    </table>
	    <div id="button">
	   <button>Inscription</button>
	   </div>

	</form>
    </div>
	</div>

</body>
</html>