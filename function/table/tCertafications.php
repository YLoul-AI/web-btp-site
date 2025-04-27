<?php
include '../db.php';

// Récupérer les données de la table Certifications
$sql = "SELECT * FROM certifications";
$stmt = $pdo->query($sql);

// Définir les couleurs
$color_primary = "#DB5B20"; // Couleur principale
$color_background = "#d9d9db"; // Couleur de fond

// Afficher les données dans un tableau
echo "<h2 style='color: $color_primary; text-align: center;'>Liste des Certifications</h2>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: $color_primary; color: white;'><th>Nom</th><th>Description</th><th>Délivré par</th><th>Date de Délivrance</th><th>Date d'Expiration</th><th>Niveau Certification</th><th>Action</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr style='background-color: $color_background;'>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['delivre_par'] . "</td>";
    echo "<td>" . $row['date_delivrance'] . "</td>";
    echo "<td>" . $row['date_expiration'] . "</td>";
    echo "<td>" . $row['niveau_certification'] . "</td>";
    echo "<td><a href='../function/Modifier/modifier_certification.php?id=" . $row['id'] . "' style='color: $color_primary;'>Modifier</a> | <a href='../function/Supprimer/supprimer_certification.php?id=" . $row['id'] . "' style='color: $color_primary;' onclick='return confirm(\"Voulez-vous vraiment supprimer cette certification ?\")'>Supprimer</a></td>";
    echo "</tr>";
}
echo "</table>";


?>
