<?php
 session_start();
 require __DIR__ . '/vendor/autoload.php';

use App\Controller\HomeController;
use App\Controller\ProduitController;
use App\Controller\UsersController;

$produitClt = new ProduitController();
$userClt = new UsersController();
$homeClt = new HomeController();

$produitClt->produitHttp();
$userClt->userHttp();
$homeClt->homeHttp();










