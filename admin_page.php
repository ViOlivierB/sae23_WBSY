<?php /* Authenticity verified by auth = TRUE */
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>
<!DOCTYPE html>
<html>
<html lang="fr">
<head>
    <title>Batiments & Capteurs</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="YSBW" />
	<meta name="description" content="SAE 23" />
	<meta name="keywords" content="HTML, CSS, PHP" />
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
</head>


<body class="bg">
<header class="hd">
   
      <h1>BATIMENTS & CAPTEURS</h1>
    
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
    <h3>Ajout/suppression de bâtiments et capteurs</h3>
    
    <section>
			<h2> Ajout/Suppression de bâtiment </h2>
			
			<p>
				<a class="button" href="./aj_bat.php"><strong> Ajout </strong ></a>
						<br />
						<br />
						ou
						<br />
						<br />
				<a class="button" href="./supp_bat.php"><strong> Suppression</strong > </a>
				
			</p>
		</section>

		<section>
			<h2> Ajout/Suppression de capteur </h2>
			
			<p>
				<a class="button" href="./aj_cap.php"><strong> Ajout </strong ></a>
							<br />
							<br />
							ou
							<br />
							<br />			
				<a class="button" href="./supp_cap.php"><strong> Suppression </strong ></a><br />
			</p>
</section>
		 
		<br />
		<br />
		<br />
		<br />
		<br /> 
		 <a class="button" href="index.html"><strong>Accueil</strong> 
			</a>
			

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
