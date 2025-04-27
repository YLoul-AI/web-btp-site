<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $role = $_POST['role'];
    $bio = $_POST['bio'];
    $photo_url = $_POST['photo_url'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $linkedin_url = $_POST['linkedin_url'];

    $sql = "INSERT INTO Equipes (nom, role, bio, photo_url, email, telephone, linkedin_url) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$nom, $role, $bio, $photo_url, $email, $telephone, $linkedin_url])) {
        echo "Membre ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du membre.";
    }
}
?>
