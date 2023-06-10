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
<br />
<br />
<br />
		<?php // Inserting form data into the DATABASE, using an SQL query and including the login script 
			include ("db.php"); // Include the database connection script
			$LOGIN= $_POST['Type_log'];// Retrieve the value of 'Type_log' from the form submission
			$PASSWORD= $_POST['Type_passwd'];
			$NOM_BAT= $_POST['Nom_bat'];
			$GEST_BAT= $_POST['Type_gest'];
			$requete = "INSERT INTO `Bâtiments` (`nom_bat`, `gestionnaire`, `login_gest`, `mdp_gest`) VALUES
			('$NOM_BAT', '$GEST_BAT', '$LOGIN', '$PASSWORD')";
			$resultat = mysqli_query($id_bd, $requete)
			or die("Execution de la requete impossible : $requete");// Execute the SQL query and handle errors if any
			mysqli_close($id_bd);
			echo "<p> Vous venez de créer le bâtiment $NOM_BAT</p>"; 
		?>
		<section>
		<br />
		<hr />
		<hr />
		<p>
			<a class="button" href="index.html"><strong>Accueil</strong> 
			</a>
		</p>
		</section>
  		 <br />
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
