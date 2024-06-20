<?php 

namespace App\Model;

use App\Entity\Produit;


class ProduitModel extends ModelGenerique {

    public function getAllProduit($produit){
        $query = "SELECT * FROM $produit";
        $stmt=$this->executerReq($query);
    
        $tab = [];
        while($res = $stmt->fetch() ){
            extract($res);
            $tab[] = new Produit($id, $img, $categorie, $nom, $prix, $idUser);


        };

        return $tab;
    }

    public function getProduit($id){
        $query = ("SELECT * FROM produit where id = :id");
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(["id" => $id]);

    
        $res = $stmt->fetch();
        
        extract($res);
        return new Produit($id, $img, $categorie, $nom, $prix, $idUser);
    }
    
    public function ajoutProduit(Produit $produit) {
        
        $query = "INSERT INTO produit  VALUES (NULL, :img, :categorie, :nom, :prix, :idUser)";
        $stmt = $this->executerReq($query, [
            "img"  => $produit->getImg(),
            "categorie"  => $produit->getCategorie(),
            "nom"  => $produit->getNom(),
            "prix" => $produit->getPrix(),
            "idUser" => $produit->getIdUser()
        ]);

        return true;
    }

    public function modifier(Produit $produit) {
        $query = "UPDATE produit SET img = :img, categorie = :cat, nom = :nom, prix = :prix, idUser = :idUser WHERE id = :id";
        $stmt = $this->executerReq($query, [
            "img"  => $produit->getImg(),
            "cat"  => $produit->getCategorie(),
            "nom"  => $produit->getNom(),
            "prix" => $produit->getPrix(),
            "idUser" => $produit->getIdUser(),
            "id"   => $produit->getId()
        ]);
    }

    public function supprimer(int $id) {
        $query = "DELETE FROM produit WHERE id = :id";
        $stmt = $this->executerReq($query, ["id" => $id]); 
    }
}
