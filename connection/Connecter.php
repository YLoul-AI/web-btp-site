<?php
// Définition des informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ptb";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
