<?php
require_once "../../connection/Connecter.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des données du formulaire
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];


// Requête SQL pour mettre à jour le mot de passe
$sql = "UPDATE login SET password = '$new_password' WHERE username = '$username'";

// Exécution de la requête
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Mot de passe changer avec succès.");</script>';
    
} else {
    echo "Erreur de mise a jour ce mot de passe: " . $conn->error;
}

// Fermeture de la connexion
$conn->close();
}
?>
