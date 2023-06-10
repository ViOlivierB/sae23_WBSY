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
  
      <h1>Suppression batiment</h1>
    
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
			<?php /* Deleting form data from the DATABASE, usng an SQL query and including the login script */
				include ("db.php");
				$NOM_BAT = $_POST['Nom_Bat'];
				$requete = "SELECT * FROM `Bâtiments` WHERE (`nom_bat`='$NOM_BAT')";
				$resultat = mysqli_query($id_bd, $requete)
					or die("Execution de la requete impossible : $requete");
					
				while($ligne=mysqli_fetch_assoc($resultat))
				 {
					extract($ligne);
					$NOM_BAT= "$NOM_BAT";
					} 

				$requete = "DELETE FROM `Bâtiments` WHERE (`nom_bat`='$NOM_BAT')";
				$resultat = mysqli_query($id_bd, $requete)
					or die("Execution de la requete impossible : $requete");
				mysqli_close($id_bd);

				echo "<p> Le batiment $NOM_BAT a été supprimé <p>"
				?>
			<hr>
			
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />	
		<p>
			<a class="button" href="index.html"><strong>Accueil</strong> 
			</a>
		</p>
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
