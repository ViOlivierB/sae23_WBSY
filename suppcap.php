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
			<?php
include("db.php"); // Inclure le script de connexion à la base de données

$NOM_CAP = $_POST['Nom_Cap'];

// Obtenir l'id_cap du capteur correspondant
$requeteIdCapteur = "SELECT `id_cap` FROM `Capteurs` WHERE `nom` = '$NOM_CAP'";
$resultatIdCapteur = mysqli_query($id_bd, $requeteIdCapteur)
    or die("Execution de la requete impossible : $requeteIdCapteur");

if (mysqli_num_rows($resultatIdCapteur) > 0) {
    $ligne = mysqli_fetch_assoc($resultatIdCapteur);
    $ID_CAP = $ligne['id_cap'];

    // Supprimer les mesures associées au capteur spécifique
    $requeteMesures = "DELETE FROM `Mesures` WHERE `id_cap` = '$ID_CAP'";
    $resultatMesures = mysqli_query($id_bd, $requeteMesures)
        or die("Execution de la requete impossible : $requeteMesures");

    // Supprimer le capteur spécifique
    $requeteCapteur = "DELETE FROM `Capteurs` WHERE `id_cap` = '$ID_CAP'";
    $resultatCapteur = mysqli_query($id_bd, $requeteCapteur)
        or die("Execution de la requete impossible : $requeteCapteur");

    echo "<p><strong>Le capteur $NOM_CAP a bien été supprimé, ainsi que les mesures associées.</strong></p>";
} else {
    echo "<p><strong>Le capteur $NOM_CAP n'existe pas.</strong></p>";
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