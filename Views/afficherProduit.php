<?php
include '../Controller/ProduitC.php';
$ProduitC = new ProduitC();
$listeProduits = $ProduitC->afficherproduit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Product List</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            background-color: #4e73df;
            color: #fff;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #2e59d9;
        }

        .btn i {
            margin-right: 8px;
        }

        .btn-danger {
            background-color: #e74a3b;
        }

        .btn-danger:hover {
            background-color: #c23321;
        }
    </style>
</head>
<body>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nom</th>
                            <th>price</th>
                            <th>image</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listeProduits as $Produit) { ?>
                            <tr>
                                <td><?php echo $Produit['id']; ?></td>
                                <td><?php echo $Produit['nom']; ?></td>
                                <td><?php echo $Produit['prix']; ?></td>
                                <td><?php echo $Produit['image']; ?></td>
                                <td><a href="supprimerproduit.php?id=<?php echo $Produit['id']; ?>" class="btn">delete</a></td>
                                <td><a href="editProduit.php?id=<?php echo $Produit['id']; ?>" class="btn">Edit</a></td>
                                



                            </tr>
                        <?php } ?>
                    </tbody>
                    <td>
                         <td><a href="afficherProduit3.php" class="btn">Product 3</a></td>
                        <td><a href="afficherProduit2.php" class="btn">Product 2</a></td>
                        <td><a href="ajouterProduit.php" class="btn">Add</a></td>
                        <td><a href="index.php" class="btn">Shop</a></td>
                    </td>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
