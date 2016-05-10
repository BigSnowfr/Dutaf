<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dutaf | Gestion des fournisseurs</title>
</head>
<body>
<?php
require_once ('../sqlconnect.php');
?>
<?php
$resultat = mysqli_query($bdd, "SELECT * FROM Fournisseur WHERE 1 ORDER BY four_id ASC ");
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
<h1>Vous avez <?php echo $row_cnt; ?> fournisseurs</h1><br/>
<h2><a href="form_new_four.php">Ajouter un fournisseur</a></h2>

<br/>
<table>
    <thead>
    <th>Numéro</th>
    <th>Nom</th>
    <th>Ville</th>
    <th>Téléphone</th>
    <th>Modifer</th>
    <th>Supprimer</th>
    </thead>
    <tbody>
    <?php while($donnees = mysqli_fetch_assoc($resultat)): ?>
        <tr>
            <td><?php echo $donnees['four_id']; ?></td>
            <td><?php echo $donnees['four_nom']; ?></td>
            <td><?php echo $donnees['four_ville']; ?></td>
            <td><?php echo $donnees['four_tel']; ?></td>
            <td><a href="form_modif_four.php?id=<?php echo $donnees['four_id']; ?>">Modifier</a></td>
            <td><a href="valide_sup_four.php?id=<?php echo $donnees['four_id']; ?>">Supprimer</a></td>

        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>
</body>
</html>