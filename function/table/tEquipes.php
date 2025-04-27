<?php
include '../db.php';

// Récupérer les données de la table Équipes
$sql = "SELECT * FROM equipes";
$stmt = $pdo->query($sql);

// Couleurs
$color_primary = "#DB5B20";
$color_background = "#d9d9db";

// Afficher les données dans un tableau
echo "<h2 style='color: $color_primary;text-align: center;'>Liste des Membres de l'Équipe</h2>";
echo "<table style='border: 1px solid $color_primary; background-color: $color_background;width: 100%;'>";
echo "<tr><th style='background-color: $color_primary; color: white;'>Nom</th><th style='background-color: $color_primary; color: white;'>Rôle</th><th style='background-color: $color_primary; color: white;'>Biographie</th><th style='background-color: $color_primary; color: white;'>Photo URL</th><th style='background-color: $color_primary; color: white;'>Email</th><th style='background-color: $color_primary; color: white;'>Téléphone</th><th style='background-color: $color_primary; color: white;'>LinkedIn URL</th><th style='background-color: $color_primary; color: white;'>Action</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['role'] . "</td>";
    echo "<td>" . $row['bio'] . "</td>";
    echo "<td>" . $row['photo_url'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['telephone'] . "</td>";
    echo "<td>" . $row['linkedin_url'] . "</td>";
    echo "<td><a href='../function/Modifier/modifier_equipe.php?id=" . $row['id'] . "' style='color: $color_primary;'>Modifier</a> | <a href='../function/Supprimer/supprimer_equipe.php?id=" . $row['id'] . "' style='color: $color_primary;' onclick='return confirm(\"Voulez-vous vraiment supprimer ce membre de l'équipe ?\")'>Supprimer</a></td>";
    echo "</tr>";
}
echo "</table>";

?>
