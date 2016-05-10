<?php
require_once ('../sqlconnect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Dutaf | Ajouter un article</title>
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
<h1>Ajouter un article</h1>

            <form action="valide_new_art.php" method="post">
                <label for="designation">Désignation :</label>
                <input type="text" name="designation"><br/>
                <label for="description">Description :</label>
                <input type="text" name="description"><br/>
                <label for="prix">Prix :</label>
                <input type="number" name="prix" min="0"><br/>
                <label for="quantite">Quantité :</label>
                <input type="number" name="quantite" min="0"><br/>
                <label for="fournisseur">Fournisseur</label>
                <select name="fournisseur" >
                    <?php
                    $resultat2 = mysqli_query($bdd, "SELECT * FROM Fournisseur");
                    while($donnees = mysqli_fetch_assoc($resultat2)): ?>
                        <option value="<?php echo $donnees['four_id']?>"><?php echo $donnees['four_nom']?></option>
                    <?php endwhile; ?>
                </select><br/>
                <button>Valider</button>
            </form>
</body>
</html>