<?php
require_once ('../sqlconnect.php');
$Session = new Session();

$id = stripcslashes(trim($_POST['id']));
$designation = stripcslashes(trim($_POST['designation']));
$description = stripcslashes(trim($_POST['description']));
$prix = stripcslashes(trim($_POST['prix']));
$quantite = stripcslashes(trim($_POST['quantite']));
$fournisseur = stripcslashes(trim($_POST['fournisseur']));


$req=$bdd->prepare("UPDATE `articles` SET `article_designation`=:designation,`article_description`=:description,`article_prix_vente`=:prix,`article_quantite`=:quantite,`_fournisseur_id`=:_fournisseur_id WHERE article_id = :article_id");
$req->bindParam('designation', $designation, PDO::PARAM_INT);
$req->bindParam('description', $description, PDO::PARAM_INT);
$req->bindParam('prix', $prix, PDO::PARAM_INT);
$req->bindParam('quantite', $quantite, PDO::PARAM_INT);
$req->bindParam('_fournisseur_id', $fournisseur, PDO::PARAM_INT);
$req->bindParam('article_id', $id, PDO::PARAM_INT);
$req->execute();
$Session->setFlash('L\'article a bien été modifié !', 'success');
header('Location: gest_art.php');

?>


