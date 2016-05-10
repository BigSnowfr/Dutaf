<?php
require_once ('../sqlconnect.php');
$Session = new Session();
$id = stripcslashes(trim($_GET['id']));

$req = $bdd->prepare("DELETE FROM `articles` WHERE `article_id` = :id");
$req->bindParam(':id', $id, PDO::PARAM_INT);
$req->execute();
$Session->setFlash('L\'article a bien été supprimé !', 'success');
header('Location: gest_art.php');
?>