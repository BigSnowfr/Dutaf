<?php
require_once ('../sqlconnect.php');
$Session = new Session();

$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$ville = $_POST['ville'];

$req = $bdd->prepare("INSERT INTO `fournisseur`(`fournisseur_nom`, `fournisseur_numero`, `fournisseur_ville`) VALUES (:nom, :tel, :ville)");
$req->bindParam(':nom', $nom, PDO::PARAM_INT);
$req->bindParam(':tel', $telephone, PDO::PARAM_INT);
$req->bindParam(':ville', $ville, PDO::PARAM_INT);
$req->execute();
$Session->setFlash('Le fournisseur a bien été ajouté à votre liste !', 'success');

header('Location: gest_four.php');
?>