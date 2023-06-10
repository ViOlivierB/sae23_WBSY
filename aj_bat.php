<?php /*Authenticity verified by auth = TRUE  */
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
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
  
      <h1>Ajout batiment</h1>
    
   <nav>
    <ul>
		    <li><a href="index.html" class="first">Accueil</a></li>
			<li><a href="administration.php">Administration</a></li>
		    <li><a href="gestion.php">Gestion </a></li>
		    <li><a href="consultation.php">Consultation</a></li>
		    <li><a href="gestion_de_projet.html">Gestion de projet</a></li>
    </ul>
   </nav>
  </header>	


	<section>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<form action="ajbat.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Ajout d'un bâtiment</legend>


					
					<label for="NOM">  Nom du bâtiment : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="Nom_bat" id ="Type" />
					<br />
					<label for="NOM_GEST">  Nom du Gestionnaire : </label>
					<input type="text" name="Type_gest" id ="Type" />
					<br />
					<label for="ID">  Login Gestionnaire : </label>
					<input type="text" name="Type_log" id ="Type" />
					<br />
					<label for="MDP">  Password Gestionnaire : </label>
					<input type="password" name="Type_passwd" id ="Type" />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrer" />
				</div>
			</form>
		</section>
<br />
		<br />
		<br /><br />
		<br />
		<br /><br />
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
