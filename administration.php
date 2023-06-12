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
   
      <h1>ADMINISTRATION </h1>
    
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
 <section id="form">
  <div class="wrapper">
         <div class="title">
            Connexion
         </div>
         <form action="php_admin.php" method="post" enctype="multipart/form-data">
            <div class="field">
               <input type="text" name="login_admin" id="login_admin" >
               <label for="login_admin">Login : </label>
            </div>
            <div class="field">
               <input type="password" name="mdp_admin" id="mdp_admin" >
               <label for="mdp_admin">Mot de passe : </label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Valider">
            </div>
         </form>
      </div>
		 
		</section> 
		 
 
<br/>
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