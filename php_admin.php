<?php
session_start();
// Storing the value of 'login_admin' received from the request in the session variable
$_SESSION["login_admin"] = $_REQUEST["login_admin"]; 
$login = $_SESSION["login_admin"];

// Storing the value of 'mdp_admin' received from the request in the session variable
$_SESSION["mdp_admin"] = $_REQUEST["mdp_admin"]; /* Récupération du mot de passe */
$motdep = $_SESSION["mdp_admin"];

/* Initializing the 'auth' session variable as FALSE means that by default,
 the user is not authenticated. In other words, when the session starts, the 'auth' variable is set to FALSE,
 indicating that the user has not been authenticated yet.*/
 
$_SESSION["auth"] = FALSE;

/*This script is responsible for verifying the authentication of the administrator
by comparing the entered username and password from the previous page.*/
if (empty($login) || empty($motdep)) {
    header("Location: login_error.php");
} else {
    /* Connexion to database */
    include("db.php");

    $request = "SELECT `login_admin` FROM `Administration`";
    $result = mysqli_query($id_bd, $request) or die("Execution de la requete impossible : $request");
    $login2 = mysqli_fetch_row($result);

// Checking if the entered username matches the stored username
    if ($login == $login2[0]) {
        $requete = "SELECT `mdp_admin` FROM `Administration`";
        $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");
        $password2 = mysqli_fetch_row($resultat);
		
// Checking if the entered password matches the stored password
        if ($motdep == $password2[0]) {
			
// Authentication successful, setting the 'auth' session variable to TRUE
			$_SESSION["auth"] = TRUE;
			
            mysqli_close($id_bd);
			
			// Redirecting the administrator to the admin_page.php
            echo "<script type='text/javascript'>document.location.replace('admin_page.php');</script>";
        } else {
            
			// Entered password is incorrect
			// Add appropriate error handling or redirect to a login_error.php page
			/* reset session */
            $_SESSION = array();
            session_destroy();
            unset($_SESSION);
            mysqli_close($id_bd);
            echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";
        }
    } else {
		// Entered username is incorrect or not found in the database
		// Add appropriate error handling or redirect to a login_error.php page
        /* reset of the session */
        $_SESSION = array();
        session_destroy();
        unset($_SESSION);
        mysqli_close($id_bd);
        echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";
    }
}
?>

