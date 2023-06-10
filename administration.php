<?php
/* Start of the session */

// The session_start() function initializes a new session or resumes an existing session.
// It allows you to store and retrieve session data,across multiple pages or requests.
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>			
<title>Administration - Connexion</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="YSBW" />
  <meta name="description" content="SAE 23" />
  <meta name="keywords" content="HTML, CSS, PHP" />
  <link rel="stylesheet" type="text/css" href="styles/style.css"/>
 </head>
 <body class="bg">

  <header class="hd">
   
      <h1>Administrateur </h1>
    
   <nav>
    <ul>
		   <li><a href="index.html" class="first">Accueil</a></li>
		   <li><a href="#">Administration</a></li>
		   <li><a href="gestion.php">Gestion </a></li>
		   <li><a href="consultation.php">Consultation</a></li>
		   <li><a href="gestion_de_projet.html">Gestion de projet</a></li>
    </ul>
   </nav>
  </header> 
 
 <section id="first">
	
	<h2>Connexion</h2>

  
			<p>
				<br />
				<em><strong>Authentification requise pour continuer</strong></em>
				<br />
			</p>
			<form action="php_admin.php" method="post" enctype="multipart/form-data"> <!-- Form to fill in, in order to authenticate as the administrator -->
				<fieldset>
					<legend>Authentifiez vous</legend>
					<label for="login_admin">Login : </label>
					<input type="text" name="login_admin" id="login_admin" />
					
					<label for="mdp_admin">Mot de passe : </label>
					<input type="password" name="mdp_admin" id="mdp_admin" />
				</fieldset>
				<p>
					<input type="submit" value="Valider" />
				</p>
			</form>
		

  </section>




  
  
   
<br/>
<br/>
<br/>
<br/>


  
  <footer class="hd">
   <ul>
	  <li>BUT1</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>IUT de BLAGNAC</li>
	</ul>
  </footer>
  
  </body>
  </html>