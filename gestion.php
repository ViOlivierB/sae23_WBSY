<?php /* Start of the session */
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
	<title>Administration</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="YSBW" />
  <meta name="description" content="SAE 23" />
  <meta name="keywords" content="HTML, CSS, PHP" />
  <link rel="stylesheet" type="text/css" href="styles/style.css"/>
 </head>

 	<body class="bg">
 			<header class="hd">
  
      <h1>Gestion</h1>
    
   <nav>
    <ul>
		    <li><a href="index.html" class="first">Accueil</a></li>
			<li><a href="administration.php">Administration</a></li>
		    <li><a href="#">Gestion </a></li>
		    <li><a href="consultation.php">Consultation</a></li>
		    <li><a href="gestion_de_projet.html">Gestion de projet</a></li>
    </ul>
   </nav>
  </header>
		<section id="first">
			<p>
				<br />
				<em><strong>Gestionnaire du batiment  </strong></em>
				<br />
			</p>
			<form action="php_gest.php" method="post" enctype="multipart/form-data"> 
				<fieldset>
					<legend>Authentifiez vous !</legend>
					<label for="login_gest">Login : </label>
					<input type="text" name="login_gest" id="login_gest" />
					
					<label for="mdp_gest">Mot de passe : </label>
					<input type="password" name="mdp_gest" id="mdp_gest" />
				</fieldset>
				<p>
					<input type="submit" value="Valider" />
				</p>
			</form>
		</section>
<br />
		<br />
		<br />
		<br />
		<br />
  
  <footer class="hd">
    <ul>
	  <li>BUT1</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>IUT de BLAGNAC</li>
	</ul>  
  </footer>

	</body>
</html>

