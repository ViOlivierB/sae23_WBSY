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
<br />
		<br />
		<br />
		<br />
		<br />
		<br />	
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />	
		<?php
	include("db.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$NOM_CAP = $_POST['Nom_Cap'];
		$TYPE_CAP = $_POST['Type_Cap'];
		$ID_BAT = $_POST['Id_Bat'];

		$request = "INSERT INTO `Capteurs` (`nom`, `type`, `id_bat`) VALUES ('$NOM_CAP', '$TYPE_CAP', '$ID_BAT')";
		$result = mysqli_query($id_bd, $request) or die("Execution de la requete impossible : $request");

		mysqli_close($id_bd);

		echo "<p><strong>Le capteur $NOM_CAP, de type $TYPE_CAP, a été ajouté.</strong></p>";
	}
?>
			
		
		<p>
			<a class="button" href="index.html"><strong>Accueil</strong> 
			</a>
		</p>
		 
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