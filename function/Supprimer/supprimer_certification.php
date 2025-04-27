<?php
include '../db.php';

// Vérifier si l'identifiant de la certification est défini dans l'URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Préparer et exécuter la requête de suppression
    $sql = "DELETE FROM certifications WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    // Rediriger vers la page de liste des certifications après la suppression
    header("Location: ../table/tCertafications.php");
    exit();
} else {
    // Si l'identifiant de la certification n'est pas défini dans l'URL, rediriger vers une page d'erreur
    header("Location: erreur.php");
    exit();
}
?>
