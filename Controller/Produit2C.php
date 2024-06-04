<?php
include_once '../config.php';
include '../Model/produit2.php';

class Produit2C {
    
    // function to retrieve all records from the "produit2" table
    function afficherproduit2(){
        $sql = "SELECT * FROM produit2";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    // function to delete a record from the "produit2" table by id
    function supprimerproduit2($id){
        $sql = "DELETE FROM produit2 WHERE id = :id";
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
    
    // function to add a record to the "produit2" table
    function ajouterproduit2($produit2) {
        $sql = "INSERT INTO produit2 (nom, prix , image) VALUES ( :nom, :prix, :image)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $produit2->getnom(),
                'prix' => $produit2->getprix(),
                'image' => $produit2->getimage()
            ]);
            $_SESSION['error'] = "Data added successfully";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    // function to update a record in the "produit2" table by id
    function modifierproduit2($id, $nom,$prix,  $image){
        try {
            $db = config::getConnexion();
            $query = $db->prepare('UPDATE produit2 SET id = :id, nom = :nom, prix = :prix , image = :image WHERE id = :id');
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
    function recupererproduit2($id){
        $sql = "SELECT * FROM produit2 WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();
            $produit2 = $query->fetch(PDO::FETCH_ASSOC);
            return $produit2;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
            return false; // return false if there was an error during the retrieval
        }
    }
    

    
    
}
?>