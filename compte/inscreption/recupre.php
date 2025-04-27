<?php
require_once "../../connection/Connecter.php"; // Inclure le fichier de connexion

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // Récupération des données du formulaire
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    // Préparation de la requête SQL pour vérifier si le compte existe déjà
    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = $conn->query($sql);

    // Vérifier si des résultats ont été retournés
    if ($result && $result->num_rows > 0) {
        echo "<h1>Ce nom d'utilisateur existe déjà.</h1>";
    } else {
        // Le compte n'existe pas, donc insérer les données dans la table login
        $sql_insert = "INSERT INTO login (full_name, username, email, phone, address, password)
                       VALUES ('$full_name', '$username', '$email', '$phone', '$address', '$password')";

        if ($conn->query($sql_insert) === TRUE) {
            echo "<h1>Enregistrement réussi !</h1>";
            echo "<p>Merci $full_name pour votre enregistrement.</p>";
        } else {
            echo "Erreur lors de l'insertion des données : " . $conn->error;
        }
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>
