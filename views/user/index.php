<?php
ob_start();
?>

<h3 class="mb-4">Utilisateurs</h3>
<p>Bienvenue <?php echo unserialize($_SESSION['user'])->getNom(); ?></p>

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
              <td>Nom</td>
              <td>Prenom</td>
              <td>Login</td>
              <td>Action</td>
            </tr>
        </thead>
        
        <?php foreach($users as $user): ?>
     
            <tr>
                
                <td> <?= $user->getNom(); ?> </td>
                <td> <?= $user->getPrenom(); ?> </td>
                <td> <?= $user->getLogin(); ?> </td>
                <td>
                    <a href="?action=delete&id=<?= $user->getId(); ?>">X</a>
                    <a href="?action=update&id=<?= $user->getId(); ?>">U</a>
                </td>
            
            
            </tr>
        <?php endforeach; ?>
   
    </table>


<?php
$content = ob_get_clean();
include "views/template.php"; 
?>