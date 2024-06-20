<?php
namespace App\Entity;

class Acheter{
    private $id;
    private $idProduit;
    private $idClient;

    public function __construct( $id,  $idProduit,  $idClient){
        $this->id = $id;
        $this->idProduit = $idProduit;
        $this->idClient = $idClient;
    }

    public function getId() {return $this->id;}

	public function getIdProduit() {return $this->idProduit;}

	public function getIdClient() {return $this->idClient;}
    

	public function setId( $id): void {$this->id = $id;}

	public function setIdProduit( $idProduit): void {$this->idProduit = $idProduit;}

	public function setIdClient( $idClient): void {$this->idClient = $idClient;}

	
	
}