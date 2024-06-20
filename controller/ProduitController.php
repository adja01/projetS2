<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Model\ProduitModel;
use App\Model\UsersModel;

class ProduitController{
    public function produitHttp(){
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $produitMld = new ProduitModel();
            $userMdl = new UsersModel();

            switch($action){

                case "produit":
                    $produits = $produitMld->getAllProduit("Produit");
                    include "views/produit/index.php";
                    break;

                case "ajoutProduit":
                    if(isset($_POST['ajoutP'])){
                        extract($_POST);
                        $img_non = $_FILES['image'];
                        $tp_nom = $_FILES['image']['tmp_name'];
                        $time = time();
                        $nouveau_nom_img = $time.".".pathinfo($_FILES['image']['name'])['extension'];
                        $deplacer_img = move_uploaded_file($_FILES['image']['tmp_name'], "public/img_db/".$nouveau_nom_img);

                        if($deplacer_img){
                            $produit = new Produit(0, $nouveau_nom_img, $categorie, $nom, $prix, $idUser);
                            $produitMld->ajoutProduit($produit);
                            header("location: ?action=produit");
                            exit;
                            
                        }
                        }
                    $users = $userMdl->getAllUsers("Users");
                    

                    include "views/produit/form.php";
                    break;

                    
                
                case "modifier":

                    if(isset($_POST['modiProduit'])){
                        extract($_POST);
                        $img_non = $_FILES['image'];
                        $tp_nom = $_FILES['image']['tmp_name'];
                        $time = time();
                        $nouveau_nom_img = $time.".".pathinfo($_FILES['image']['name'])['extension'];
                        $deplacer_img = move_uploaded_file($_FILES['image']['tmp_name'], "public/img_db/".$nouveau_nom_img);

                        if($deplacer_img){
                            $produitUp = new Produit($id, $nouveau_nom_img, $categorie, $nom, $prix, $idUser);
                            $produitMld->modifier($produitUp);
                            
                            header("location: ?action=produit");
                            exit;
                        }
                    }
                    $produit = $produitMld->getProduit($_GET['id']);
                    $users = $userMdl->getAllUsers("Users");

                    include "views/produit/new.php";
                    break;
                
                case "supprimer":
                    $id = $_GET['id'];
                    $produitMld->supprimer($id);

                    header("location: ?action=produit");
                    exit;
                    break;

            }

          

        }else{
            include "views/index2.php";
        }
    }
}