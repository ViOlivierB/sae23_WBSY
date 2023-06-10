<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Consultation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="YSBW">
  <meta name="description" content="SAE 23">
  <meta name="keywords" content="HTML, CSS, PHP">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body class="bg">
  <header class="hd">
    <h1>Consultation</h1>
    <nav>
      <ul>
        <li><a href="index.html" class="first">Accueil</a></li>
        <li><a href="administration.php">Administration</a></li>
        <li><a href="gestion.php">Gestion</a></li>
        <li><a href="#">Consultation</a></li>
        <li><a href="gestion_de_projet.html">Gestion de projet</a></li>
      </ul>
    </nav>
  </header>

  <section id="first">
    <h2>Toutes les mesures mises à jour</h2>
    <p>
      Sont affichées ci-dessous l'entièreté des mesures mises à jour.
    </p>

    <?php
    /* Selection of the last value for each sensor, using a MySQL query */
    include("db.php");

    $requete = "SELECT * FROM `Mesures` WHERE id_cap = '1' ORDER BY Date DESC LIMIT 1";
    $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");
    while ($ligne = mysqli_fetch_assoc($resultat)) {
      extract($ligne);
      $valeur1 = $Valeur;
    }

    $requete = "SELECT * FROM `Mesures` WHERE id_cap = '2' ORDER BY Date DESC LIMIT 1";
    $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");
    while ($ligne = mysqli_fetch_assoc($resultat)) {
      extract($ligne);
      $valeur2 = $Valeur;
    }

    $requete = "SELECT * FROM `Mesures` WHERE id_cap = '3' ORDER BY Date DESC LIMIT 1";
    $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");
    while ($ligne = mysqli_fetch_assoc($resultat)) {
      extract($ligne);
      $valeur3 = $Valeur;
    }

    $requete = "SELECT * FROM `Mesures` WHERE id_cap = '4' ORDER BY Date DESC LIMIT 1";
    $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");
    while ($ligne = mysqli_fetch_assoc($resultat)) {
      extract($ligne);
      $valeur4 = $Valeur;
    }

    $requete = "SELECT * FROM `Mesures` WHERE id_cap = '5' ORDER BY Date DESC LIMIT 1";
    $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");
    while ($ligne = mysqli_fetch_assoc($resultat)) {
      extract($ligne);
      $valeur5 = $Valeur;
    }

    $requete = "SELECT * FROM `Mesures` WHERE id_cap = '6' ORDER BY Date DESC LIMIT 1";
    $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");
    while ($ligne = mysqli_fetch_assoc($resultat)) {
      extract($ligne);
      $valeur6 = $Valeur;
    }

    mysqli_close($id_bd);
    ?>

    <!-- Display of the values, with their room and unit -->
    <h3>Bâtiment E - Salle E105</h3>

    <table>
      <tr>
        <td>Température</td>
        <td>Humidité</td>
        <td>CO2</td>
      </tr>
      <tr>
        <td><?php echo $valeur1; ?> °C</td>
        <td><?php echo $valeur2; ?> %</td>
        <td><?php echo $valeur3; ?> %</td>
      </tr>
    </table>

    <br />
    <br />

    <h3>Bâtiment B - Salle B109</h3>
    <table>
      <tr>
        <td>Température</td>
        <td>Humidité</td>
        <td>CO2</td>
      </tr>
      <tr>
        <td><?php echo $valeur4; ?> °C</td>
        <td><?php echo $valeur5; ?> %</td>
        <td><?php echo $valeur6; ?> %</td>
      </tr>
    </table>

    <style>
      /* Style de base pour le tableau */
      table {
        width: 100%;
        border-collapse: collapse;
      }

      /* Style pour l'en-tête du tableau */
      th {
        background-color: #f2f2f2;
        color: #333;
        font-weight: bold;
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
      }

      /* Style pour les cellules du tableau */
      td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
      }

      /* Style pour les lignes impaires du tableau */
      tr:nth-child(odd) {
        background-color: #91a8ba;
      }

      /* Style pour survoler les lignes du tableau */
      tr:hover {
        background-color: #eaeaea;
      }
    </style>
  </section>
<br />
		<br />
		<br />
		<br />
		<br /><br />
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
