<?php
ob_start();

?>

<h3 class="mb-4">Connexion</h3>


   <div class="container form-container">
        <form method="post" class="col-md-6 col-lg-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>                
                <input type="text" name="login" class="form-control"  required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" name="mdp" class="form-control"  required>
            </div>

           
            <button type="submit" name="envoyer" class="btn btn-dark">Envoyer</button>
            
        </form>
    </div>

<?php
$content = ob_get_clean();
include "views/template.php";
?>
