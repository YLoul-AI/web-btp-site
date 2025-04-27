<?php
include '../db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM equipes WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    header("Location: ../table/tEquipes.php");
    exit();
} else {
    header("Location: erreur.php");
    exit();
}
?>
