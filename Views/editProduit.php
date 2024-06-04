<?php
// Include necessary files and classes
include_once '../config.php';
include_once '../Controller/ProduitC.php';

// Check if product ID is provided in the URL
if(isset($_GET['id'])) {
    $produitC = new ProduitC();
    
    // Retrieve product information based on ID
    $id = $_GET['id'];
    $produit = $produitC->recupererproduit($id);
    
    // Check if the product exists
    if($produit) {
        // Check if the form is submitted
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve updated product information from the form
            $nom = $_POST['nom'];
            $prix = $_POST['prix'];

            // Get the old image name
            $old_image_name = $produit['image'];
            
            // File upload handling
            $target_dir = "../Views"; // Specify the directory where you want to save uploaded files
            $target_file = $target_dir . basename($_FILES["register-image"]["name"]);

            if (move_uploaded_file($_FILES["register-image"]["tmp_name"], $target_file)) {
                // If file upload is successful, update the product information in the database
                $image_name = basename($_FILES["register-image"]["name"]); // Get only the image name
                $produitC->modifierproduit($id, $nom, $prix, $image_name);

                // Remove old image if exists
                if($old_image_name != null) {
                    unlink($target_dir . $old_image_name);
                }
                
                // Redirect to afficherProduit.php after updating
                header("Location: afficherProduit.php");
                exit;
            } else {
                echo 'Erreur lors du téléchargement du fichier.';
            }
        }
    } else {
        // Handle case where the product with the provided ID does not exist
        // Redirect or display an error message
        header("Location: error.php");
        exit;
    }
} else {
    // Handle case where no product ID is provided in the URL
    // Redirect or display an error message
    header("Location: error.php");
    exit;
}
?>

<!-- HTML Form for Editing Product -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="file"] {
            cursor: pointer;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Product</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="<?php echo $produit['nom']; ?>">
            
            <label for="prix">Prix:</label>
            <input type="text" id="prix" name="prix" value="<?php echo $produit['prix']; ?>">
            
            <label for="image">Image:</label>
            
            <input type="file" id="image" name="register-image" accept="image/*" required>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
