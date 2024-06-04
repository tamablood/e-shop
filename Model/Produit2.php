<?php

class Produit2{
    private int $id;
    private string $nom;
    private float $prix;
    private String $image;
    
   
   

    public function __construct( string $nom, float $prix, string $image) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->image = $image;
        
    
    }
    
    public function getnom(){
        return $this->nom;
    }
    
    public function getprix(){
        return $this->prix;
    }
    public function getimage(){
        return $this->image;
    }
    
    
    public function setid($id){
        $this->$id = $id;
    }
    public function setnom($nom){
        $this->nom = $nom;
    }
    
    public function setprix($prix){
        $this->prix = $prix;
    }

    public function setimage($image){
        $this->image = $image;
    }
    
    
   
    
}

?>