<?php
include '../db.php';

// Vérifier si l'identifiant de l'équipe est passé en paramètre
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $nom = $_POST['nom'];
        $role = $_POST['role'];
        $bio = $_POST['bio'];
        $photo_url = $_POST['photo_url'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $linkedin_url = $_POST['linkedin_url'];

        // Mettre à jour les informations de l'équipe dans la base de données
        $sql = "UPDATE equipes SET nom=?, role=?, bio=?, photo_url=?, email=?, telephone=?, linkedin_url=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $role, $bio, $photo_url, $email, $telephone, $linkedin_url, $id]);

        // Rediriger vers une page de succès après la mise à jour
        header("Location: ../table/tEquipes.php");
        exit();
    } else {
        // Récupérer les données du membre de l'équipe depuis la base de données
        $sql = "SELECT * FROM equipes WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $equipe = $stmt->fetch();
        
        // Vérifier si l'équipe existe
        if (!$equipe) {
            // Rediriger vers une page d'erreur si l'équipe n'existe pas
            header("Location: erreur.php");
            exit();
        }
    }
} else {
    // Rediriger vers une page d'erreur si l'identifiant de l'équipe n'est pas spécifié
    header("Location: erreur.php");
    exit();
}

include 'FormModefier/formEqu.html';

?>
