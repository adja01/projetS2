<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="views/style.css">
    <title>A&O Store</title>
</head>
<body>
    <header class="text-center">
        <!-- <h1 class="my-3">A&O Store</h1> -->

        <?php if(isset($_SESSION['user'])):?>
 
            <a class="btn btn-dark"  href="?action=deconnexion">Deconnexion</a>

        <?php else:?>

        <a class="btn btn-dark" href="?action=inscription">Inscription</a>
        <a class="btn btn-dark" href="?action=login">Connexion</a>
        <?php endif;?>
    </header>
    <?php if(isset($_SESSION['user'])):?>
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href=".">A&O Store</a>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="?action=produit">Produit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=users">Utilisateur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Commande</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php endif;?>

    <main class="container">
        <?= $content; ?>
    </main>

    <footer class="text-center text-light p-4 mt-5">
        &copy;GestionBoutique-A&O_Store
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNJO+Mb5Qkaayzc5sGgGVMOLG/q0OHhTVU6ztsYrsnZLlzN21TfpU8EfWz6UM2j" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGktanpT03sK7MQm9KR6aIjTqDg6lrIFlJ/nzFsG8kY/dx6/8c/uI8fwi8F" crossorigin="anonymous"></script>
</body>
</html>
