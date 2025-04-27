<?php
require_once "../../connection/Connecter.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Requête SQL pour vérifier les informations dans la table "compte"
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Vérification si des résultats ont été retournés
    if ($result->num_rows > 0) {
        header("Location: ../../contenu/main.html");
        echo "Connexion réussie";

    } else {
        
         echo '<script>alert("Nom d\'utilisateur ou mot de passe incorrect");</script>';
    } 
    
}

// Fermeture de la connexion à la base de données
$conn->close();
?>