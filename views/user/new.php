<?php
ob_start();
?>


<h2 class="text-center">Modification de l'Utilisateur</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $user->getId(); ?>" >
        <div class="form-group">
           <label for="exampleInputEmail1">Nom</label>
            <input type="text" name="nom" class="form-control" value="<?= $user->getNom(); ?>">
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prénom</label>
            <input type="text" name="prenom" class="form-control"  value="<?= $user->getPrenom(); ?>">
         
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="mdp" class="form-control" placeholder="Password" value="<?= $user->getMdp(); ?>">
          
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" name="login" class="form-control"  value="<?= $user->getLogin(); ?>">
         
        </div>

        <div class="form-check">
            <input type="radio" name="statut" class="form-check-input" value="<?= $user->getStatut(); ?>">
            <label class="form-check-label" for="exampleCheck">ADMIN</label>
        </div>
     <button type="submit" name="upUser" class="btn btn-dark col-1 m-4">Envoyer</button>
    </form>

        

<?php
$content = ob_get_clean();
include "views/template.php";
?>