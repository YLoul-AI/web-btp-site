<?php
include '../db.php';
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $delivre_par = $_POST['delivre_par'];
    $date_delivrance = $_POST['date_delivrance'];
    $date_expiration = $_POST['date_expiration'];
    $niveau_certification = $_POST['niveau_certification'];

    // Préparer et exécuter la requête SQL pour insérer les données dans la table "Certifications"
    $sql = "INSERT INTO Certifications (nom, description, delivre_par, date_delivrance, date_expiration, niveau_certification) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $res=$stmt->execute([$nom, $description, $delivre_par, $date_delivrance, $date_expiration, $niveau_certification]);
    if ($res) {
        echo "Certafication ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du Certafiaction.";
    }
    // Rediriger vers une page de succès
    exit();
}
?>