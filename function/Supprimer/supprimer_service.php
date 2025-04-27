<?php
include '../db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM services WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    header("Location: ../table/tServices.php");
    exit();
} else {
    header("Location: erreur.php");
    exit();
}
?>
