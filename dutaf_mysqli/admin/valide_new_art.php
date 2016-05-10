<?php
require_once ('../sqlconnect.php');

$designation = $_POST['designation'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$quantite = $_POST['quantite'];
$fournisseur = $_POST['fournisseur'];

$query = "INSERT INTO articles (art_design, art_descript, art_prix, art_qte, four_id) VALUES(?, ?, ?, ?, ?)";
$statement = $bdd->prepare($query);
$statement->bind_param('ssiis', $designation, $description, $prix, $quantite, $fournisseur);

if($statement->execute()){
    header('Location: gest_art.php');
}else{
    die('Error : ('. $bdd->errno .') '. $bdd->error);
}
$statement->close();


?>