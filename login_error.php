<?php
/* Start of the session */

// The session_start() function initializes a new session or resumes an existing session.
// It allows you to store and retrieve session data,across multiple pages or requests.
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
    
	<h1>Erreur de connexion</h1>
   
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
		<?php
/* Destruction of the session table */

// Clearing the session data
$_SESSION = array();

// Destroying the session
session_destroy();

// Unsetting the session variable
unset($_SESSION);
?>

	
	

		<br />
		<br />
		<br />		
	<h2> Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es !!</h2>
		<br />
		<br />
		<br />
		<br />
		<br />
		<p>
			<em><h3> Identifiant ou mot de passe non saisi ou erron&eacute; !!! </h3></em>
		</p>

		<br />

		

		<p>
			<a class="button" href="index.html"><strong>Accueil</strong> 
			</a>
		</p>
		<br />
		<br />
		<br />
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
