<?php
include '../Controller/ProduitC.php';
$ProduitC = new ProduitC();
$ProduitC->supprimerproduit($_GET["id"]);
header('Location: afficherProduit.php');
?>
