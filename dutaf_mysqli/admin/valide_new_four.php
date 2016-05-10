<?php
require_once ('../sqlconnect.php');

$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$ville = $_POST['ville'];

$query = "INSERT INTO Fournisseur (four_nom, four_tel, four_ville) VALUES(?, ?, ?)";
$statement = $bdd->prepare($query);
$statement->bind_param('sss', $nom, $telephone, $ville);

if($statement->execute()){
    header('Location: gest_four.php');
}else{
    die('Error : ('. $bdd->errno .') '. $bdd->error);
}
$statement->close();


?>
