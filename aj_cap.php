<?php /* Authenticity verified by auth = TRUE  */
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
  
      <h1>Ajout capteur</h1>
    
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
			<form action="ajcap.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Ajout d'un capteur</legend>
		
		<label for="Nom"><strong>Nom du capteur à ajouter :</strong></label>
		<input type="text" name="Nom_Cap" id="Nom" required />
		<br />
		<label for="Type"><strong>Type du capteur à ajouter :</strong></label>
		<input type="text" name="Type_Cap" id="Type" required />
		<br />
		<label for="Bat"><strong>ID du Bâtiment du capteur à ajouter :</strong></label>
		<input type="text" name="Id_Bat" id="Bat" required />
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
