<?php
session_start();
$login = $_REQUEST["login_gest"];
$motdep = $_REQUEST["mdp_gest"];

if (empty($login) || empty($motdep)) {
    header("Location: login_error.php");
    exit();
}

include("db.php");

// Vérification if the 'login_gest' and'mdp_gest' is on the database
$request = "SELECT 1 FROM `Bâtiments` WHERE login_gest = ? AND mdp_gest = ?";
$stmt = mysqli_prepare($id_bd, $request);
mysqli_stmt_bind_param($stmt, "ss", $login, $motdep);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_row($result);

if ($row) {
    // Authentification good by session auth to TRUE
    $_SESSION["auth"] = true;
    mysqli_close($id_bd);

    // Redirect to the page that we want to access
    if ($login === "mansal" && $motdep === "saladier") {
        header("Location: gestion_E.php");
    } elseif ($login === "soutou" && $motdep === "tounir") {
        header("Location: gestion_B.php");
    } else {
        header("Location: login_error.php");
    }
    exit();
}

// Reset of the session session
$_SESSION = array();
session_destroy();
unset($_SESSION);
mysqli_close($id_bd);
header("Location: login_error.php");
?>