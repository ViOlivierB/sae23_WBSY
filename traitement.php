 <?php
// Récupération des données du formulaire
$login = $_POST['login'];
$password = $_POST['password'];

// Connexion à la base de données
$servername = "localhost";
$username = "boubeker";
$password_db = "22205912";
$dbname = "sae23";

$conn = new mysqli($servername, $username, $password_db, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Requête pour insérer les données dans la table de la base de données
$sql = "INSERT INTO utilisateurs (login, password) VALUES ('$login', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Données insérées avec succès";
} else {
    echo "Erreur lors de l'insertion des données: " . $conn->error;
}

$conn->close();
?>