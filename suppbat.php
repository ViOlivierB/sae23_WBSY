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
<?php
include("db.php"); // Inclure le script de connexion à la base de données

$NOM_BAT = $_POST['Nom_Bat']; // Récupérer le nom du bâtiment du formulaire

// Obtenir l'id_bat du bâtiment correspondant
$requeteIdBatiment = "SELECT `id_bat` FROM `Bâtiments` WHERE `nom_bat` = '$NOM_BAT'";
$resultatIdBatiment = mysqli_query($id_bd, $requeteIdBatiment)
    or die("Execution de la requete impossible : $requeteIdBatiment");

if (mysqli_num_rows($resultatIdBatiment) > 0) {
    $ligne = mysqli_fetch_assoc($resultatIdBatiment);
    $ID_BAT = $ligne['id_bat'];

    // Supprimer les mesures associées aux capteurs du bâtiment
    $requeteMesures = "DELETE FROM `Mesures` WHERE `id_cap` IN (SELECT `id_cap` FROM `Capteurs` WHERE `id_bat` = $ID_BAT)";
    $resultatMesures = mysqli_query($id_bd, $requeteMesures)
        or die("Execution de la requete impossible : $requeteMesures");

    // Supprimer les capteurs associés au bâtiment
    $requeteCapteurs = "DELETE FROM `Capteurs` WHERE `id_bat` = $ID_BAT";
    $resultatCapteurs = mysqli_query($id_bd, $requeteCapteurs)
        or die("Execution de la requete impossible : $requeteCapteurs");

    // Supprimer le bâtiment lui-même
    $requeteBatiment = "DELETE FROM `Bâtiments` WHERE `id_bat` = $ID_BAT";
    $resultatBatiment = mysqli_query($id_bd, $requeteBatiment)
        or die("Execution de la requete impossible : $requeteBatiment");

    echo "<p>Le bâtiment $NOM_BAT a été supprimé, ainsi que tous les capteurs et les mesures associées.</p>";
} else {
    echo "<p>Le bâtiment $NOM_BAT n'existe pas.</p>";
}

mysqli_close($id_bd);
?>



			
			
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
