<h2 class="text-center">Détail du produit<?= $produit->getCategorie() ?></h2>
    <div class="row">
        <div class="card col-5 m-1 p-1">
            <div class="w-100">
                <img src="<?= $produit->getImg() ?>" class="img-fluid" alt="">
            </div>

            <div class="card-body">
                <h3 class="card-title"><?= $produit->getCategorie() ?></h3>
                <h3 class="card-text"><?= $produit->getPrix() ?> €</h3>
                <p class="card-text">Etat <?= $produit->getNom() ?> </p>
            </div>
        </div> 


    </div>