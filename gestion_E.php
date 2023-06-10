<?php
/* Authenticity verified by auth = TRUE */
session_start();
if ($_SESSION["auth"] != TRUE)
    header("Location:login_error.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Gestion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="YSBW" />
    <meta name="description" content="SAE 23" />
    <meta name="keywords" content="HTML, CSS, PHP" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<body class="bg">
    <header class="hd">

        <h1>Batiment E</h1>

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
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <?php
    echo '<style>
  
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  
  th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
  }

  
  td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
  }

  
  tr:nth-child(odd) {
    background-color: #91a8ba;
  }

  
  tr:hover {
    background-color: #eaeaea;
  }
</style>';

    include("db.php");

    $request = "SELECT * FROM `Mesures` WHERE id_cap = '1' ORDER BY Date DESC LIMIT 5";
    $result = mysqli_query($id_bd, $request) or die("Execution de la requete impossible : $request");

    echo '<h3> Affichage des mesures des capteurs de la salle E105 du bâtiment E </h3>';
    echo '<br />';
    echo '<br />';

    echo '<table>';
    echo "<th> Capteur </th>";
    echo "<th> Date et Heure </th>";
    echo "<th> Valeurs (°C)</th>";

    while ($ligne = mysqli_fetch_assoc($result)) {
        extract($ligne);
        echo '<tr>';
        echo "<td>Température  </td>";
        echo "<td> $Date $Time </td>";
        echo "<td> $Valeur </td>";
        echo '</tr>';
    }
    echo '</table>';

    echo '<br />';
    echo '<br />';
    echo '<br />';

    $request = "SELECT * FROM `Mesures` WHERE id_cap = '2' ORDER BY Date DESC LIMIT 5";
    $result = mysqli_query($id_bd, $request) or die("Execution de la requete impossible : $request");
    echo '<table>';
    echo "<th> Capteur </th>";
    echo "<th> Date et Heure </th>";
    echo "<th> Valeurs (%)</th>";

    while ($line = mysqli_fetch_assoc($result)) {
        extract($line);
        echo '<tr>';
        echo "<td> Humidité  </td>";
        echo "<td> $Date $Time </td>";
        echo "<td> $Valeur </td>";
        echo '</tr>';
    }
    echo '</table>';


    echo '<br />';
    echo '<br />';
    echo '<br />';

    $request = "SELECT * FROM `Mesures` WHERE id_cap = '3' ORDER BY Date DESC LIMIT 5";
    $result = mysqli_query($id_bd, $request) or die("Execution de la requete impossible : $request");
    echo '<table>';
    echo "<th> Capteur </th>";
    echo "<th> Date et Heure </th>";
    echo "<th> Valeurs (%)</th>";

    while ($line = mysqli_fetch_assoc($result)) {
        extract($line);
        echo '<tr>';
        echo "<td> cO2 </td>";
        echo "<td> $Date $Time </td>";
        echo "<td> $Valeur </td>";
        echo '</tr>';
    }
    echo '</table>';

    mysqli_close($id_bd);
    ?>


    </p>
    </aside>

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

