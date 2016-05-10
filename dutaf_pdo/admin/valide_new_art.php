<?php
require_once ('../sqlconnect.php');
$Session = new Session();
$designation = stripcslashes(trim($_POST['designation']));
$description = stripcslashes(trim($_POST['description']));
$prix = stripcslashes(trim($_POST['prix']));
$quantite = stripcslashes(trim($_POST['quantite']));
$fournisseur = stripcslashes(trim($_POST['fournisseur']));

$req = $bdd->prepare("INSERT INTO `articles`(`article_designation`, `article_description`, `article_prix_vente`, `article_quantite`, `_fournisseur_id`) VALUES (:designation, :description, :prix, :quantite, :fournisseur)");
$req->bindParam(':designation', $designation, PDO::PARAM_INT);
$req->bindParam(':description', $description, PDO::PARAM_INT);
$req->bindParam(':prix', $prix, PDO::PARAM_INT);
$req->bindParam(':quantite', $quantite, PDO::PARAM_INT);
$req->bindParam(':fournisseur', $fournisseur, PDO::PARAM_INT);
$req->execute();
$Session->setFlash('L\'article a bien été ajouté à votre catalogue !', 'success');
header('Location: gest_art.php');
?>