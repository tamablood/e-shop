<?php

include '../Controller/ProduitC.php';

$article = new ProduitC();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['register-nom']) && !empty($_POST['register-prix']) && !empty($_FILES['register-image']['name'])) {
        $nom = htmlspecialchars($_POST['register-nom']);
        $prix = htmlspecialchars($_POST['register-prix']);

        $target_dir = "../Views";
        $target_file = $target_dir . basename($_FILES["register-image"]["name"]);

        if (move_uploaded_file($_FILES["register-image"]["tmp_name"], $target_file)) {
            
            $image_name = basename($_FILES["register-image"]["name"]); 
            $Produit = new Produit($nom, $prix, $image_name);
            $article->ajouterproduit($Produit);
            header('Location: afficherProduit.php');
        } else {
            echo 'Erreur lors du téléchargement du fichier.';
        }
    } else {
        echo 'Veuillez remplir tous les champs.';
    }
}

?>
