<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $budget = $_POST['budget'];
    $localisation = $_POST['localisation'];
    $statut = $_POST['statut'];
    $nom_client = $_POST['nom_client'];
    $contact_client = $_POST['contact_client'];

    $sql = "INSERT INTO Projets (nom, description, date_debut, date_fin, budget, localisation, statut, nom_client, contact_client) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$nom, $description, $date_debut, $date_fin, $budget, $localisation, $statut, $nom_client, $contact_client])) {
        echo "Projet ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du projet.";
    }
}
?>
