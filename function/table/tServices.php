<?php
include '../db.php';

// Récupérer les données de la table Services
$sql = "SELECT * FROM Services";
$stmt = $pdo->query($sql);

// Définir les couleurs
$color_primary = "#DB5B20"; // Couleur principale
$color_background = "#d9d9db"; // Couleur de fond

// Afficher les données dans un tableau
echo "<h2 style='color: $color_primary;text-align: center;'>Liste des Services</h2>";
echo "<table style='border: 1px solid $color_primary; background-color: $color_background;width: 100%;'>";
echo "<tr><th style='background-color: $color_primary; color: white;'>Nom</th><th style='background-color: $color_primary; color: white;'>Description</th><th style='background-color: $color_primary; color: white;'>Catégorie</th><th style='background-color: $color_primary; color: white;'>Prix</th><th style='background-color: $color_primary; color: white;'>Durée Estimée</th><th style='background-color: $color_primary; color: white;'>Action</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['categorie'] . "</td>";
    echo "<td>" . $row['prix'] . "</td>";
    echo "<td>" . $row['duree_estimee'] . "</td>";
    echo "<td><a href='../function/Modifier/modifier_service.php?id=" . $row['id'] . "' style='color: $color_primary;'>Modifier</a> | <a href='../function/Supprimer/supprimer_service.php?id=" . $row['id'] . "' style='color: $color_primary;' onclick='return confirm(\"Voulez-vous vraiment supprimer ce service ?\")'>Supprimer</a></td>";
    echo "</tr>";
}
echo "</table>";

?>
