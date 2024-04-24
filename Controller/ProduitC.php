<?php
include_once '../config.php';
include '../Model/produit.php';

class ProduitC {
    
    // function to retrieve all records from the "produit" table
    function afficherproduit(){
        $sql = "SELECT * FROM produit";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    // function to delete a record from the "produit" table by id
    function supprimerproduit($id){
        $sql = "DELETE FROM produit WHERE id = :id";
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
    
    // function to add a record to the "produit" table
    function ajouterproduit($produit) {
        $sql = "INSERT INTO produit (nom, prix , image) VALUES ( :nom, :prix, :image)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $produit->getnom(),
                'prix' => $produit->getprix(),
                'image' => $produit->getimage()
            ]);
            $_SESSION['error'] = "Data added successfully";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    // function to update a record in the "produit" table by id
    function modifierproduit($id, $nom, $prix, $image){
        try {
            $db = config::getConnexion();
            $query = $db->prepare('UPDATE produit SET id = :id, nom = :nom, prix = :prix , image = :image WHERE id = :id');
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
    function recupererproduit($id){
        $sql = "SELECT * FROM produit WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();
            $produit = $query->fetch(PDO::FETCH_ASSOC);
            return $produit;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
            return false; // return false if there was an error during the retrieval
        }
    }
    

    
    
}
?>