<?php
require_once ('../sqlconnect.php');
$Session = new Session();

$id = stripcslashes(trim($_GET['id']));

$req = $bdd->prepare("DELETE FROM `fournisseur` WHERE `fournisseur_id` = :id");
$req->bindParam(':id', $id, PDO::PARAM_INT);
$req->execute();
$Session->setFlash('Le fournisseur a bien été supprimé !', 'success');
header('Location: gest_four.php');

?>