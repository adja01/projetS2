<?php
ob_start();

?>
    <a class="btn btn-dark" href="?action=ajoutProduit">ajoutProduit</a>

<h3 class="mb-4">Liste de nos différents produits</h3>

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
              <td>Image</td>
              <td>Categorie</td>
              <td>Nom</td>
              <td>Prix</td>
              <td>Action</td>
            </tr>
        </thead>
        
        <?php foreach($produits as $produit): ?>
     
            <tr>
                
                <td> 
                    <img src="public/img_db/<?= $produit->getImg(); ?>" alt="" width="150px">
                </td>
                <td> <?= $produit->getCategorie(); ?> </td>
                <td> <?= $produit->getNom(); ?> </td>
                <td> <?= $produit->getPrix(); ?> </td>
                <td>
                    <a href="?action=supprimer&id=<?= $produit->getId(); ?>">X</a>
                    <a href="?action=modifier&id=<?= $produit->getId(); ?>">U</a>
               
                </td>
            
            
            </tr>
        <?php endforeach; ?>
   
    </table>


<?php
$content = ob_get_clean();
include "views/template.php"; 
?>