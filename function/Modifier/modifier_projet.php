<?php
include '../db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
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

        $sql = "UPDATE Projets SET nom=?, description=?, date_debut=?, date_fin=?, budget=?, localisation=?, statut=?, nom_client=?, contact_client=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $description, $date_debut, $date_fin, $budget, $localisation, $statut, $nom_client, $contact_client, $id]);

        header("Location: ../table/tProjets.php");
        exit();
    } else {
        $sql = "SELECT * FROM Projets WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $projet = $stmt->fetch();
    }
} else {
    header("Location: erreur.php");
    exit();
}
include 'FormModefier/formPro.html';
?>

           