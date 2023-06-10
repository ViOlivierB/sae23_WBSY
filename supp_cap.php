<?php  /* Authenticity verified by auth = TRUE */
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
  
      <h1>Suppression capteur</h1>
    
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
			<br />
			<form action="suppcap.php" method="post" enctype="multipart/form-data"> <!-- Form to fill in, in order to delete a sensor, and all the values associated -->
				<fieldset>
					<legend> Suppression d'un capteur </legend>
			
					<label for="Type"><strong>  Type du capteur &agrave;  supprimer : </strong></label>
					<input type="text" name="Type_Cap" id ="Type" />
					<br />
					<label for="Bat"><strong>  ID du Bâtiment du capteur &agrave; supprimer : </strong></label>
					<input type="text" name="Id_Bat" id ="Bat" />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Enregistrer" />
				</div>
			</form>
		</section>
<br />
		<br />
		<br />
		<br />
		<br /><br />
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
