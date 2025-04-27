<?php
include '../db.php';


// Vérifier si l'identifiant de la certification est défini dans l'URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $delivre_par = $_POST['delivre_par'];
        $date_delivrance = $_POST['date_delivrance'];
        $date_expiration = $_POST['date_expiration'];
        $niveau_certification = $_POST['niveau_certification'];

        // Mettre à jour les données dans la base de données
        $sql = "UPDATE Certifications SET nom=?, description=?, delivre_par=?, date_delivrance=?, date_expiration=?, niveau_certification=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom, $description, $delivre_par, $date_delivrance, $date_expiration, $niveau_certification, $id]);

        // Rediriger vers la page de succès après la modification
        header("Location: ../table/tCertafications.php");
        exit();
    } else {
        // Si le formulaire n'a pas été soumis, récupérer les données de la certification à partir de la base de données
        $sql = "SELECT * FROM Certifications WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $certification = $stmt->fetch();
    }
} else {
    // Si l'identifiant de la certification n'est pas défini, rediriger vers une page d'erreur
    header("Location: erreur.php");
    exit();
}
include 'FormModefier/formCer.html';
?>

