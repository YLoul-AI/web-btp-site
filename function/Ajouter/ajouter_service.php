<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $categorie = $_POST['categorie'];
    $prix = $_POST['prix'];
    $duree_estimee = $_POST['duree_estimee'];

    $sql = "INSERT INTO Services (nom, description, categorie, prix, duree_estimee) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$nom, $description, $categorie, $prix, $duree_estimee])) {
        echo "Service ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du service.";
    }
}
?>
