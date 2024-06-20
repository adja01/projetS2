<?php
namespace App\Model;

use App\Entity\Users;


class UsersModel extends ModelGenerique {

    public function getAllUsers($user) {
        $query = $this->pdo->query("SELECT * FROM $user");
        $stmt = $query->fetchAll(\PDO::FETCH_ASSOC);
    
        $tab = [];
        foreach ($stmt as $row) {
            extract($row);
            $tab[] = new Users($id, $nom, $prenom, $mdp, $login, $statut);
        }
        return $tab;
    }

    public function getUser($id){
        $query = ("SELECT * FROM users where id = :id");
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(["id" => $id]);

    
        $res = $stmt->fetch();
        
        extract($res);
        return new Users($id, $nom, $prenom, $mdp, $login, $statut);
    }
     

    public function connexion($login, $mdp) { 
        $query = " SELECT * FROM users WHERE login = :login AND mdp = :mdp";
        $stmt = $this->executerReq($query, [
            "login" => $login,
            "mdp"   => $mdp

        ]);

        if($res = $stmt->fetch()){
            extract($res);
           
            $_SESSION['user'] = serialize(new Users($id, $nom, $prenom, $mdp, $login, $statut ));  // la sérialisation est une technique puissante pour la persistance et la communication des objets, mais elle doit être utilisée avec précaution pour éviter les problèmes de sécurité et de compatibilité.
            return $_SESSION['user'];

        }


    }

    public function modifUser(Users $user) {
        

        $query = "UPDATE users SET nom = :nom, prenom = :prenom, mdp = :mdp, login = :login, statut = :statut WHERE id = :id";
        $this->executerReq($query, [
            "nom" => $user->getNom(),
            "prenom" => $user->getPrenom(),
            "mdp"   => $user->getMdp(),
            "login" => $user->getLogin(),
            "statut" => $user->getStatut(),
            "id" => $user->getId()
        ]);

        return true;
    }

    public function inscription(Users $user) {

        $query = "INSERT INTO users (id, nom, prenom, mdp, login, statut) VALUES (NULL, :nom, :prenom, :mdp, :login, :statut)";
        $this->executerReq($query, [
            "nom" => $user->getNom(),
            "prenom" => $user->getPrenom(),
            "mdp" => $user->getMdp(),
            "login" => $user->getLogin(),
            "statut" => $user->getStatut()
        ]);

        // lastInsertId méthode pratique pour gérer et suivre les insertions dans une base de données, en particulier lorsqu'il est important de connaître l'ID de la ligne insérée pour des opérations ultérieures.
       
        $id = $this->getPdo()->lastInsertId();  
       $_SESSION['user'] = serialize(new Users($id, $user->getNom(), $user->getPrenom(), $user->getMdp(), $user->getLogin(), $user->getStatut()));
       return $_SESSION['user'];
    }

    public function suppUser(int $id) {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute(["id" => $id]);
    }

}
?>




