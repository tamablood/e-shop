<?php
include '../Controller/ProduitC.php';
$ProduitC = new ProduitC();
$ProduitC->supprimerproduit($_GET["id"]);
header('Location: afficherProduit.php');
?>
<?php
include '../Controller/ProduitC.php';
$Produit2C = new ProduitC();
$Produit2C->supprimerproduit($_GET["id"]);
header('Location: afficherProduit.php');
?>