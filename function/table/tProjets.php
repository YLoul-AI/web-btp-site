<?php
include '../db.php';

// Récupérer les données de la table Projets
$sql = "SELECT * FROM projets";
$stmt = $pdo->query($sql);

// Définir les couleurs
$color_primary = "#DB5B20"; // Couleur principale
$color_background = "#d9d9db"; // Couleur de fond

// Afficher les données dans un tableau
echo "<h2 style='color: $color_primary;text-align: center;'>Liste des Projets</h2>";
echo "<table style='border: 1px solid $color_primary; background-color: $color_background;width: 100%;'>";
echo "<tr><th style='background-color: $color_primary; color: white;'>Nom</th><th style='background-color: $color_primary; color: white;'>Description</th><th style='background-color: $color_primary; color: white;'>Date de Début</th><th style='background-color: $color_primary; color: white;'>Date de Fin</th><th style='background-color: $color_primary; color: white;'>Budget</th><th style='background-color: $color_primary; color: white;'>Localisation</th><th style='background-color: $color_primary; color: white;'>Statut</th><th style='background-color: $color_primary; color: white;'>Nom du Client</th><th style='background-color: $color_primary; color: white;'>Contact du Client</th><th style='background-color: $color_primary; color: white;'>Action</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['date_debut'] . "</td>";
    echo "<td>" . $row['date_fin'] . "</td>";
    echo "<td>" . $row['budget'] . "</td>";
    echo "<td>" . $row['localisation'] . "</td>";
    echo "<td>" . $row['statut'] . "</td>";
    echo "<td>" . $row['nom_client'] . "</td>";
    echo "<td>" . $row['contact_client'] . "</td>";
    echo "<td><a href='../function/Modifier/modifier_projet.php?id=" . $row['id'] . "' style='color: $color_primary;'>Modifier</a> | <a href='../function//Supprimer/supprimer_projet.php?id=" . $row['id'] . "' style='color: $color_primary;' onclick='return confirm(\"Voulez-vous vraiment supprimer ce projet ?\")'>Supprimer</a></td>";
    echo "</tr>";
}
echo "</table>";

?>
