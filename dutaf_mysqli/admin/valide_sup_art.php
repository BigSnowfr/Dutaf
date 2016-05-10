<?php
require_once ('../sqlconnect.php');

$stmt = $bdd->prepare("DELETE FROM articles WHERE art_id = ?");
$stmt->bind_param('i', $_GET['id']);
$stmt->execute();
$stmt->close();

header('Location: gest_art.php');
?>