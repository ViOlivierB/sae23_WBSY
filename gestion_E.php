<?php
/* Authenticity verified by auth = TRUE */
session_start();
if ($_SESSION["auth"] != TRUE)
    header("Location:login_error.php");
?>

<?php
	include("db.php");

	$dataPointsTemperature = array();
	$dataPointsHumidity = array();
	$dataPointsCO2 = array();

	// Récupérer les mesures de température pour la salle E105 du bâtiment E depuis la base de données
	$requestTemperature = "SELECT `id_mes`, `Valeur` FROM `Mesures` WHERE `id_cap` =  1 ORDER BY `Date` DESC LIMIT 5";
	$resultTemperature = mysqli_query($id_bd, $requestTemperature) or die("Execution de la requete impossible : $requestTemperature");

	// Parcourir les résultats et construire les points de données pour la température
	while ($row = mysqli_fetch_assoc($resultTemperature)) {
		$idMesure = $row['id_mes'];
		$valeur = $row['Valeur'];

		array_push($dataPointsTemperature, array("x" => $idMesure, "y" => $valeur));
	}

	// Récupérer les mesures d'humidité pour la salle E105 du bâtiment E depuis la base de données
	$requestHumidity = "SELECT `id_mes`, `Valeur` FROM `Mesures` WHERE `id_cap` = 2 ORDER BY `Date` DESC LIMIT 5";
	$resultHumidity = mysqli_query($id_bd, $requestHumidity) or die("Execution de la requete impossible : $requestHumidity");

	// Parcourir les résultats et construire les points de données pour l'humidité
	while ($row = mysqli_fetch_assoc($resultHumidity)) {
		$idMesure = $row['id_mes'];
		$valeur = $row['Valeur'];

		array_push($dataPointsHumidity, array("x" => $idMesure, "y" => $valeur));
	}

	// Récupérer les mesures de CO2 pour la salle E105 du bâtiment E depuis la base de données
	$requestCO2 = "SELECT `id_mes`, `Valeur` FROM `Mesures` WHERE `id_cap` = 3 ORDER BY `Date` DESC LIMIT 5";
	$resultCO2 = mysqli_query($id_bd, $requestCO2) or die("Execution de la requete impossible : $requestCO2");

	// Parcourir les résultats et construire les points de données pour le CO2
	while ($row = mysqli_fetch_assoc($resultCO2)) {
		$idMesure = $row['id_mes'];
		$valeur = $row['Valeur'];

		array_push($dataPointsCO2, array("x" => $idMesure, "y" => $valeur));
	}

	mysqli_close($id_bd);
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
	<script>
window.onload = function () {
	var chartTemperature = new CanvasJS.Chart("chartContainerTemperature", {
		theme: "light2",
		animationEnabled: true,
		zoomEnabled: true,
		title: {
			text: "Température"
		},
		data: [{
			type: "area",
			dataPoints: <?php echo json_encode($dataPointsTemperature, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chartTemperature.render();

	var chartHumidity = new CanvasJS.Chart("chartContainerHumidity", {
		theme: "light2",
		animationEnabled: true,
		zoomEnabled: true,
		title: {
			text: "Humidité"
		},
		data: [{
			type: "area",
			dataPoints: <?php echo json_encode($dataPointsHumidity, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chartHumidity.render();

	var chartCO2 = new CanvasJS.Chart("chartContainerCO2", {
		theme: "light2",
		animationEnabled: true,
		zoomEnabled: true,
		title: {
			text: "CO2"
		},
		data: [{
			type: "area",
			dataPoints: <?php echo json_encode($dataPointsCO2, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chartCO2.render();
}
</script>
	
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

    <?php
    echo '<style>
  
  table {
    width: 100%;
    border-collapse: collapse;
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

    $requestTemperature = "SELECT * FROM `Mesures` WHERE id_cap = '1' ORDER BY Date DESC LIMIT 5";
    $resultTemperature = mysqli_query($id_bd, $requestTemperature) or die("Execution de la requete impossible : $requestTemperature");

    echo '<h3> Affichage des mesures de température de la salle E109 du bâtiment E </h3>';
    echo '<br />';
    echo '<br />';

    echo '<table>';
    echo "<th> Capteur </th>";
    echo "<th> Date et Heure </th>";
    echo "<th> Valeurs (°C)</th>";

    while ($ligne = mysqli_fetch_assoc($resultTemperature)) {
        extract($ligne);
        echo '<tr>';
        echo "<td> Température </td>";
        echo "<td> $Date $Time </td>";
        echo "<td> $Valeur </td>";
        echo '</tr>';
    }
    echo '</table>';

    echo '<br />';
    echo '<br />';
    echo '<br />';

    $requestHumidity = "SELECT * FROM `Mesures` WHERE id_cap = '2' ORDER BY Date DESC LIMIT 5";
    $resultHumidity = mysqli_query($id_bd, $requestHumidity) or die("Execution de la requete impossible : $requestHumidity");
    echo '<table>';
    echo "<th> Capteur</th>";
    echo "<th> Date et Heure </th>";
    echo "<th> Valeurs (%) </th>";

    while ($line = mysqli_fetch_assoc($resultHumidity)) {
        extract($line);
        echo '<tr>';
        echo "<td> Humidité </td>";
        echo "<td> $Date $Time </td>";
        echo "<td> $Valeur </td>";
        echo '</tr>';
    }
    echo '</table>';

    echo '<br />';
    echo '<br />';
    echo '<br />';

    $requestCO2 = "SELECT * FROM `Mesures` WHERE id_cap = '3' ORDER BY Date DESC LIMIT 5";
    $resultCO2 = mysqli_query($id_bd, $requestCO2) or die("Execution de la requete impossible : $requestCO2");
    echo '<table>';
    echo "<th> Capteur </th>";
    echo "<th> Date et Heure </th>";
    echo "<th> Valeurs (%)</th>";

    while ($ligne = mysqli_fetch_assoc($resultCO2)) {
        extract($ligne);
        echo '<tr>';
        echo "<td> cO2 </td>";
        echo "<td> $Date $Time </td>";
        echo "<td> $Valeur </td>";
        echo '</tr>';
    }
    echo '</table>';

    mysqli_close($id_bd);
    ?>

<br />
    <br />

    <div id="chartContainerTemperature" style="height: 370px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<br />
    <br />

	<div id="chartContainerHumidity" style="height: 370px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<br />
    <br />

	<div id="chartContainerCO2" style="height: 370px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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


