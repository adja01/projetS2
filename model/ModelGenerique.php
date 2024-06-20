<?php


namespace App\Model;

abstract class ModelGenerique{

    protected $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql: host=localhost; dbname=s2_boutique", "root", "",[
            \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION, \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC

        ]);
    }

    public function executerReq($query, array $params = []){
        // Prépare la requête SQL en utilisant PDO
        $stmt = $this->pdo->prepare($query);
        
        // Parcourt chaque paramètre pour échapper les caractères spéciaux HTML
        foreach ($params as $cle => $valeur){
            $params[$cle] = htmlentities($valeur);
        }
    
        // Exécute la requête avec les paramètres échappés
        $stmt->execute($params);
        
        // Retourne l'objet PDOStatement résultant de l'exécution
        return $stmt;
    }
    


    public function getPdo(){
        return $this->pdo;
    }

}