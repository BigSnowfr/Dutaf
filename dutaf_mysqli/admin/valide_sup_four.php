<?php
require_once ('../sqlconnect.php');

$stmt = $bdd->prepare("DELETE FROM Fournisseur WHERE four_id = ?");
$stmt->bind_param('i', $_GET['id']);
$stmt->execute();
$stmt->close();
header('Location: gest_four.php');





?>