<?php
ob_start();
?>


<h2 class="text-center">Inscription</h2>
    <form action="" method="post">
        <input type="hidden" name="id" >
        <div class="form-group">
           <label for="exampleInputEmail1">Nom</label>
            <input type="text" name="nom" class="form-control" value="<?= $_POST['nom'] ?? '' ?>">
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prénom</label>
            <input type="text" name="prenom" class="form-control"  value="<?= $_POST['prenom'] ?? '' ?>">
         
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="mdp" class="form-control" placeholder="Password" >
          
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" name="login" class="form-control"  value="<?= $_POST['login'] ?? '' ?>">
         
        </div>

        <div class="form-check">
            <input type="radio" name="statut" class="form-check-input" value="admin" <?= isset($_POST['statut']) && $_POST['statut'] == 'admin' ? 'checked' : '' ?> id="exampleCheck">
            <label class="form-check-label" for="exampleCheck">ADMIN</label>
        </div>

    
        <button type="submit" class="btn btn-dark col-1 m-4">Envoyer</button>
    </form>

        

<?php
$content = ob_get_clean();
include "views/template.php";
?>