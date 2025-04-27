<?php
include '../db.php';

// Vérifier si l'identifiant du service est défini dans l'URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $categorie = $_POST['categorie'];
        $prix = $_POST['prix'];
        $duree_estimee = $_POST['duree_estimee'];

        // Préparer et exécuter la requête de mise à jour
        $sql = "UPDATE Services SET nom=?, description=?, categorie=?, prix=?, duree_estimee=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $description, $categorie, $prix, $duree_estimee, $id]);

        // Rediriger vers une page de succès après la modification
        header("Location: ../table/tServices.php");
        exit();
    } else {
        // Si le formulaire n'a pas été soumis, récupérer les données du service à modifier
        $sql = "SELECT * FROM Services WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $service = $stmt->fetch();
    }
} else {
    // Si l'identifiant du service n'est pas défini dans l'URL, rediriger vers une page d'erreur
    header("Location: erreur.php");
    exit();
}
include 'FormModefier/formSer.html';
?>


