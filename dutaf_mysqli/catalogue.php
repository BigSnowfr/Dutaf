<?php
require_once ('sqlconnect.php');

$resultat = mysqli_query($bdd, "SELECT * FROM articles INNER JOIN Fournisseur ON Fournisseur.four_id = articles.four_id WHERE 1");
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dutaf | Catalogue</title>
</head>
<body>

<h1>Notre catalogue</h1>
<table>
    <thead>
    <th>Désignation</th>
    <th>Description</th>
    <th>Prix</th>
    <th>Quantité</th>
    <th>Fournisseur</th>
    </thead>
    <tbody>
    <?php while($donnees = mysqli_fetch_assoc($resultat)): ?>
        <tr>
            <td><?php echo $donnees['art_descript']; ?></td>
            <td><?php echo $donnees['art_design']; ?></td>
            <td><?php echo $donnees['art_prix']; ?></td>
            <td><?php echo $donnees['art_qte']; ?></td>
            <td><?php echo $donnees['four_nom']; ?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>