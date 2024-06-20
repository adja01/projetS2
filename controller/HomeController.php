<?php
namespace App\Controller;

use App\Model\ProduitModel;

class HomeController{
    public function homeHttp(){
           $produitMld = new ProduitModel();


            $ps = $produitMld->getAllProduit("Produit");
    
            include 'views/index.php';
     
       
        
       
            
             
        
    }
}