<?php
require_once ('../sqlconnect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Dutaf | Gestion</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="../index.php">Accueil</a></li>
        <li><a href="../catalogue.php">Catalogue</a></li>
        <li><a href="../form_budget.php">Votre budget</a></li>
        <li><a href="gestion.php">Admin</a></li>
    </ul>
</nav>
<?php
$resultat = mysqli_query($bdd, "SELECT * FROM articles WHERE 1");
$resultat2 = mysqli_query($bdd, "SELECT * FROM Fournisseur WHERE 1");
$row_cnt = $resultat->num_rows;
$row_cnt2 = $resultat2->num_rows;
?>
<ul>
    <a href="gest_art.php"><li>Articles : <?php echo $row_cnt; ?> items</li></a>
    <a href="gest_four.php"><li>Fournisseurs : <?php echo $row_cnt2; ?></li></a>
</ul>
</body>
</html>