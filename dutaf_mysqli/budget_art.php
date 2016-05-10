<?php
require_once ('sqlconnect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dutaf</title>
</head>
<body>

            <?php
            $prix = $_POST['prix'];
            $test = is_numeric($prix);
            if($test == true && $prix > 0){
                $resultat = mysqli_query($bdd, "SELECT * FROM articles INNER JOIN Fournisseur ON Fournisseur.four_id = articles.four_id WHERE art_prix <= '$prix'");
                ?>
            <h1>Articles au prix inférieur à <?php echo $prix; $i=0;?> €</h1>
            <table class="table table-striped">
                <thead>
                <th>Numéro</th>
                <th>Désignation</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Fournisseur</th>
                </thead>
                <tbody>
                <?php while($donnees = mysqli_fetch_assoc($resultat)):
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $donnees['art_descript']; ?></td>
                        <td><?php echo $donnees['art_design']; ?></td>
                        <td><?php echo $donnees['art_prix']; ?></td>
                        <td><?php echo $donnees['four_nom']; ?></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <?php
            }else{
                echo "<h2>Vous n'avez pas rentré un nombre ou la valeur est négative...</h2>";
            }
            ?>
</body>
</html>