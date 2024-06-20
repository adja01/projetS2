<?php
ob_start();
?>


<!-- Formulaire pour ajouter ou modifier un produit -->

<h2 class="text-center">Ajouter un produit</h2>
    <form method="post" class="row" enctype="multipart/form-data" >
                
        <div class="form-group col-4">
            <label for="img">Image :</label>
            <input type="file" class="form-control" id="img" name="image" required>
         
        </div>

        <div class="form-group col-4">
            <label for="exampleInputEmail1">Categorie</label>
            <input type="text" name="categorie" class="form-control">
        </div>
               
        <div class="form-group col-4">
            <label for="exampleInputEmail1">Nom</label>
            <input type="text" name="nom" class="form-control">
        </div>
                
        <div class="form-group col-4">
            <label for="exampleInputEmail1">Prix</label>
            <input type="number" name="prix" class="form-control">
        </div>
                
        <div class="col-4 form-group">
            <label for="idUser">Utilisateur</label>
            <select name="idUser" class="col-4 form-control">
                <?php foreach($users as $user): ?>
                    <option value="<?= $user->getId() ?>"<?= (isset($produit) && $produit->getIdUser() == $user->getId()) ? ' selected' : ''; ?>>
                        <?= $user->getNom() . ' ' . $user->getPrenom(); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" name="ajoutP" class="btn btn-dark col-1 m-4">Envoyer</button>
    </form>
            

<?php
$content = ob_get_clean();
include "views/template.php"; 
?>


