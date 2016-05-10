<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dutaf | Gestion des articles</title>
</head>
<body>
<?php
require_once ('../sqlconnect.php');
?>
<?php
$resultat = mysqli_query($bdd, "SELECT * FROM articles INNER JOIN Fournisseur ON Fournisseur.four_id = articles.four_id WHERE 1 ORDER BY art_design ASC ");

$row_cnt = $resultat->num_rows;
?>
<nav>
    <ul>
        <li><a href="../index.php">Accueil</a></li>
        <li><a href="../catalogue.php">Catalogue</a></li>
        <li><a href="../form_budget.php">Votre budget</a></li>
        <li><a href="gestion.php">Admin</a></li>
    </ul>
</nav>
<h1>Voici votre catalogue - Total : <?php echo $row_cnt; ?> articles</h1><br/>
<h2><a href="form_new_art.php">Ajouter un article</a></h2>
<br/>
<table>
    <thead>
    <th>Désignation</th>
    <th>Description</th>
    <th>Prix</th>
    <th>Quantité</th>
    <th>Fournisseur</th>
    <th>Modifer</th>
    <th>Supprimer</th>
    </thead>
    <tbody>
    <?php while($donnees = mysqli_fetch_assoc($resultat)): ?>
        <tr>
            <td><?php echo $donnees['art_descript']; ?></td>
            <td><?php echo $donnees['art_design']; ?></td>
            <td><?php echo $donnees['art_prix']; ?></td>
            <td><?php echo $donnees['art_qte']; ?></td>
            <td><?php echo $donnees['four_nom']; ?></td>
            <td><a href="form_modif_art.php?id=<?php echo $donnees['art_id']; ?>">Modifier</a></td>
            <td><a href="valide_sup_art.php?id=<?php echo $donnees['art_id']; ?>">Supprimer</a></td>

        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>
</body>
</html>