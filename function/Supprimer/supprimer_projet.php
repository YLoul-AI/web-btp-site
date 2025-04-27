<?php
include '../db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM projets WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    header("Location: ../table/tProjets.php");
    exit();
} else {
    header("Location: erreur.php");
    exit();
}
?>
