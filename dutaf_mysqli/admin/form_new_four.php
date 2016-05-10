<?php
require_once ('../sqlconnect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
   <title>Dutaf | Ajouter un fournisseur</title>
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
<h1>Ajouter un fournisseur</h1>

            <form action="valide_new_four.php" method="post">
                <label for="nom">Nom :</label>
                <input type="text" name="nom"><br/>
                <label for="telephone">Téléphone :</label>
                <input type="telephone" name="telephone"><br/>
                <label for="ville">Ville :</label>
                <input type="text" name="ville"><br/>
                <button>Valider</button>
            </form>
</body>
</html>