<?php
require_once ('../sqlconnect.php');

$results = $bdd->query("UPDATE Fournisseur SET four_nom='".$_POST['nom']."', four_tel='".$_POST['telephone']."', four_ville = '".$_POST['ville']."' WHERE four_id = '".$_POST['id']."'");
if($results){
    header('Location: gest_four.php');
}else{
    print 'Error : ('. $bdd->errno .') '. $bdd->error;
}
?>