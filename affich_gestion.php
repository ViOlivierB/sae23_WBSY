<!DOCTYPE html>
<html lang="fr">
 <head>
<title>Gestion</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="YSBW" />
  <meta name="description" content="SAE 23" />
  <meta name="keywords" content="HTML, CSS, PHP" />
  <link rel="stylesheet" type="text/css" href="styles/style.css"/>
 </head>
 <body class="indication-couleur">

  <header>
    
      <h1> Gestion</h1>
   
   <nav>
    <ul>
		   <li><a href="index.html" class="first">Accueil</a></li>
		   <li><a href="administration.php">Administration</a></li>
		   <li><a href="gestion.php">Gestion</a></li>
		   <li><a href="consultation.php">Consultation</a></li>
		   <li><a href="gestion_de_projet.html">Gestion de projet</a></li>
    </ul>
   </nav>
  </header> 
 <section id="first">
	<?php /* Display of the last 15 values of the building RT, using the login script */
	include ("db.php");

				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE104' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";

				/* Display of the values, with its date of collection and sensor name */

				while($ligne=mysqli_fetch_assoc($result))
				 {	
					extract($ligne);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CE104' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';
					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";

				/* Display of the values, with its date of collection and sensor name */

				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'CE208' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table>';

					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (PPM)</th>";

				/* Display of the values, with its date of collection and sensor name */

				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';

				$request = "SELECT * FROM `MESURE` WHERE CAPT_NOM = 'TE208' ORDER BY MES_DATE DESC LIMIT 15";
				$result = mysqli_query($id_bd, $request)
					or die("Execution de la requete impossible : $request");
				echo '<table class="fin">';

					echo "<th> Salle </th>";
					echo "<th> Date et Heure </th>";
					echo "<th> Valeurs (°C)</th>";

				/* Display of the values, with its date of collection and sensor name */
				
				while($line=mysqli_fetch_assoc($result))
				 {	
					extract($line);
					echo '<tr>';
					echo 	"<td> $CAPT_NOM </td>";
					echo 	"<td> $MES_DATE </td>";
					echo 	"<td> $MES_VAL </td>";
					echo '</tr>';
				 }
				echo '</table>';
	mysqli_close($id_bd);
			?>
	
  </section>
  

  
   <aside id="last">
    <hr />
    <p><em> Validation de la page HTML5 - CSS3 </em></p>
	<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fboubeker.atwebpages.com%2FSAE14%2FParcours_Pr%25C3%25A9_BUT.html" target="_blank"> 
		<img class= "image-responsive" src="images/html5.png" alt="HTML5 Valide !" />
	</a>
	 
	<p>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=boubeker.atwebpages.com%2FSAE14&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=fr">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="CSS Valide !" />
    </a>
</p>
  </aside>
  
  </br>
</br>
</br>
</br>

</br>

  <footer>
   <ul>
	  <li>BUT1</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>GROUPE YSBW</li>
	</ul>  
  </footer> 
  
  
  
  
</body>  
</html>