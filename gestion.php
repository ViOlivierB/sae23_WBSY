<?php /* Start of the session */
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
  
      <h1>GESTION</h1>
    
   <nav>
    <ul>
		    <li><a href="index.html" class="first">Accueil</a></li>
			<li><a href="administration.php">Administration</a></li>
		    <li><a href="#">Gestion </a></li>
		    <li><a href="consultation.php">Consultation</a></li>
		    <li><a href="gestion_de_projet.html">Gestion de projet</a></li>
    </ul>
   </nav>
  </header>

<section id="form">
  <div class="wrapper">
         <div class="title">
            Connexion
         </div>
         <form action="php_gest.php" method="post" enctype="multipart/form-data">
            <div class="field">
               <input type="text" name="login_gest" id="login_gest" >
               <label for="login_gest">Login : </label>
            </div>
            <div class="field">
               <input type="password" name="mdp_gest" id="mdp_gest" >
               <label for="mdp_gest">Mot de passe : </label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Valider">
            </div>
         </form>
      </div>
		 
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

