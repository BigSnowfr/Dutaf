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
<h1>Modifier un fournisseur</h1>
            <?php
            $id = $_GET['id'];
            $resultat = mysqli_query($bdd, "SELECT * FROM Fournisseur WHERE four_id = '$id'");
            while($donnees = mysqli_fetch_assoc($resultat)): ?>
            <form action="valide_modif_four.php" method="post">
                <input name="id" value="<?php echo $donnees['four_id'];?>" hidden>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" value="<?php echo $donnees['four_nom'];?>"><br/>
                <label for="telephone">Téléphone :</label>
                <input type="tel" name="telephone" value="<?php echo $donnees['four_tel'];?>"><br/>
                <label for="ville">Ville :</label>
                <input type="text" name="ville" value="<?php echo $donnees['four_ville'];?>"><br/>

                <button>Valider</button>
                <?php endwhile; ?>
            </form>
</body>
</html>