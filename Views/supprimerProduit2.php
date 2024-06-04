<?php
include '../Controller/Produit2C.php';
$ProduitC = new Produit2C();
$ProduitC->supprimerproduit2($_GET["id"]);
header('Location: afficherProduit2.php');
?>
<?php
include '../Controller/Produit2C.php';
$Produit2C = new Produit2C();
$Produit2C->supprimerproduit2($_GET["id"]);
header('Location: afficherProduit2.php');
?>