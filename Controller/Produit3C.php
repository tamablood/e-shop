<?php
include_once '../config.php';
include '../Model/produit3.php';

class Produit3C {
    
    // function to retrieve all records from the "produit3" table
    function afficherproduit3(){
        $sql = "SELECT * FROM produit3";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    // function to delete a record from the "produit3" table by id
    function supprimerproduit3($id){
        $sql = "DELETE FROM produit3 WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    
    // function to add a record to the "produit3" table
    function ajouterproduit3($produit3) {
        $sql = "INSERT INTO produit3 (nom, prix , image) VALUES ( :nom, :prix, :image)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $produit3->getnom(),
                'prix' => $produit3->getprix(),
                'image' => $produit3->getimage()
            ]);
            $_SESSION['error'] = "Data added successfully";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    // function to update a record in the "produit3" table by id
    function modifierproduit3($id, $nom,$prix,  $image){
        try {
            $db = config::getConnexion();
            $query = $db->prepare('UPDATE produit3 SET id = :id, nom = :nom, prix = :prix , image = :image WHERE id = :id');
            $query->execute([
                'id' => $id,
                'nom' => $nom,
                'prix' => $prix,
                'image' => $image
                
            ]);
            return true; // return true if the update was successful
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
            return false; // return false if there was an error during the update
        }
    }
    function recupererproduit3($id){
        $sql = "SELECT * FROM produit3 WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();
            $produit3 = $query->fetch(PDO::FETCH_ASSOC);
            return $produit3;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
            return false; // return false if there was an error during the retrieval
        }
    }
    

    
    
}
?>