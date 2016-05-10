<?php
try
{
    $bdd = mysqli_connect('localhost','mmi15','****', 'basemmi15***');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>
