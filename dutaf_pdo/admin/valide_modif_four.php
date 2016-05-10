<?php
require_once ('../sqlconnect.php');
$Session = new Session();
$id = stripcslashes(trim($_POST['id']));
$nom = stripcslashes(trim($_POST['nom']));
$tel = stripcslashes(trim($_POST['telephone']));
$ville = stripcslashes(trim($_POST['ville']));


$req=$bdd->prepare("UPDATE `fournisseur` SET fournisseur_nom=:nom, fournisseur_numero=:tel, fournisseur_ville=:ville WHERE fournisseur_id = :id");
$req->bindParam(':nom', $nom, PDO::PARAM_INT);
$req->bindParam(':tel', $tel, PDO::PARAM_INT);
$req->bindParam(':ville', $ville, PDO::PARAM_INT);
$req->bindParam(':id', $id, PDO::PARAM_INT);
$req->execute();
$Session->setFlash('Le fournisseur a bien été modifié !', 'success');
header('Location: gest_four.php');
?>