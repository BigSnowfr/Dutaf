<?php
require_once ('../sqlconnect.php');

$stmt = $bdd->prepare("UPDATE articles SET art_descript = ?,
   art_design = ?,
   art_prix = ?,
   art_qte = ?,
   four_id = ?
   WHERE art_id = ?");
$stmt->bind_param('sssdii',
    $_POST['description'],
    $_POST['designation'],
    $_POST['prix'],
    $_POST['quantite'],
    $_POST['fournisseur'],
    $_POST['id']);
$stmt->execute();
$stmt->close();
header('Location: gest_art.php');
?>


