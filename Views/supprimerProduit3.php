<?php
include '../Controller/Produit3C.php';
$ProduitC = new Produit3C();
$ProduitC->supprimerproduit3($_GET["id"]);
header('Location: afficherProduit3.php');
?>
<?php
include '../Controller/Produit3C.php';
$Produit2C = new Produit3C();
$Produit2C->supprimerproduit3($_GET["id"]);
header('Location: afficherProduit3.php');
?>