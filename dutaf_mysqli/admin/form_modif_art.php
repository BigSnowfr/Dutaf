<?php
require_once ('../sqlconnect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Dutaf | Modifier un article</title>
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
<h1>Modifier un article</h1>
            <?php
            $id = $_GET['id'];
            $resultat = mysqli_query($bdd, "SELECT * FROM articles INNER JOIN Fournisseur ON Fournisseur.four_id = articles.four_id WHERE art_id = '$id'");

            while($donnees = mysqli_fetch_assoc($resultat)): ?>
            <form action="valide_modif_art.php" method="post">
                <input name="id" hidden value="<?php echo $id; ?>">
                <label for="designation">Désignation :</label>
                <input type="text" name="designation" value="<?php echo $donnees['art_design']?>"><br/>
                <label for="description">Description :</label>
                <input type="text" name="description" value="<?php echo $donnees['art_descript']?>"><br/>
                <label for="prix">Prix :</label>
                <input type="number" name="prix" value="<?php echo $donnees['art_prix']?>"><br/>
                <label for="quantite">Quantité :</label>
                <input type="number" name="quantite" value="<?php echo $donnees['art_qte']?>"><br/>
                <label for="fournisseur">Fournisseur</label>
                <select name="fournisseur" >
                    <?php
                    $resultat2 = mysqli_query($bdd, "SELECT * FROM Fournisseur");
                    while($donnees = mysqli_fetch_assoc($resultat2)): ?>
                        <option value="<?php echo $donnees['four_id']?>"><?php echo $donnees['four_nom']?></option>
                    <?php endwhile; ?>
                </select><br/>
                <?php endwhile; ?>
                <button type="submit">Valider</button>
            </form>
</body>
</html>