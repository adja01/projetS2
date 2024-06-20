<?php

namespace App\Controller;

use App\Entity\Users;
use App\Model\UsersModel;

class UsersController {

    function userHttp(){

        if(isset($_GET['action'])){

            $action = $_GET['action'];
            $userMld = new UsersModel();

            switch  ($action){

                case "users": 
                    $users = $userMld->getAllUsers("Users");
                    include "views/user/index.php";
                    break;

                case "inscription":
                    if(isset($_POST['nom'])){
                        extract($_POST);

                        $user = new Users(0, $nom, $prenom, $mdp, $login, $statut);
                        $userMld->inscription($user);
                        if(isset($_SESSION['user'])){


                            header ("location: ?action=users");
                            exit;

                        }
                       
                    
                    }
                    include "views/user/inscription.php";
                    break;

                case "getOne":
                    $user = $userMld->getOne($user, $id);
                    break;

                case "update":


                    if(isset($_POST['upUser'])){
                        extract($_POST);
                        $userUp = new Users($id, $nom, $prenom, $mdp, $login, $statut);
                        $userMld->modifUser($userUp);
                        header("location: ?action=users");
                        exit;
                    }
                    $user = $userMld->getUser($_GET['id']);
                    include "views/user/new.php";
                    break;

                case "delete":
                    $id = $_GET['id'];
                    $userMld->suppUser($id);


                    header("location: ?action=users");
                    exit;
                    
                    break;



                case "login":
                    if (isset($_POST['envoyer'] )){
                        extract($_POST);

                        $userMld->connexion($login, $mdp);
                       
                        if (isset($_SESSION['user'])) {
                            header("Location: ?action=users");
                            exit;
                    
                        }
                    }
                    include "views/user/form.php";
                    break;

                case "deconnexion":
                    if($_SESSION['user']){
                        session_destroy();
                        header("location: .");
                        exit;
                    }
                    
                    break;
            }
        }else{
            include "views/index.php";
        }
    }
}