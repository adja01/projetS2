<?php
namespace App\Entity;

class Users{
    private $id;
    private $nom;
    private $prenom;
    private $mdp;
    private $login;
    private $statut;

  public function __construct( $id,  $nom,  $prenom,  $mdp,  $login,  $statut){
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mdp = $mdp;
    $this->login = $login;
    $this->statut = $statut;
}
	

	
	public function getId() {return $this->id;}

	public function getNom() {return $this->nom;}

	public function getPrenom() {return $this->prenom;}

	public function getMdp() {return $this->mdp;}

	public function getLogin() {return $this->login;}

	public function getStatut() {return $this->statut;}

	
  public function setId( $id): void {$this->id = $id;}

	public function setNom( $nom): void {$this->nom = $nom;}

	public function setPrenom( $prenom): void {$this->prenom = $prenom;}

	public function setMdp( $mdp): void {$this->mdp = $mdp;}

	public function setLogin( $login): void {$this->login = $login;}

	public function setStatut( $statut): void {$this->statut = $statut;}

}