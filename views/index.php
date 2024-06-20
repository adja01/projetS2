<?php
ob_start(); 
?>


<h2 class="">Nos produits!!! </h2>

<div class="row mt-4 justify-content-around">
    <?php foreach($ps as $produit): ?>
        <div class="card col-3 m-1 p-1">
            <div class="w-100">
                <img src="public/img_db/<?= $produit->getImg() ?>" class="img-fluid" alt="" width="150px">
            </div>

            <div class="card-body">
                <h3 class="card-title"><?= $produit->getNom() ?></h3>
                <h3 class="card-text"><?= $produit->getPrix() ?> €</h3>
            </div>
            <!-- <a class="btn btn-outline-red" href="?action=detail&id=<?= $produit->getId() ?>">Détail du produit</a> -->

        </div> 
    <?php endforeach; ?>

</div>

<?php
$content = ob_get_clean();
include "views/template.php";
?>