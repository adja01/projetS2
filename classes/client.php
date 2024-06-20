<?php
namespace App\Entity;

class Client{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $cp;
    private $ville;
    private $telephone;

    public function __construct( $id,  $nom,  $prenom,  $adresse,  $cp,  $ville,  $telephone){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->telephone = $telephone;
    }

    public function getId() {return $this->id;}

	public function getNom() {return $this->nom;}

	public function getPrenom() {return $this->prenom;}

	public function getAdresse() {return $this->adresse;}

	public function getCp() {return $this->cp;}

	public function getVille() {return $this->ville;}

	public function getTelephone() {return $this->telephone;}

	
    public function setId( $id): void {$this->id = $id;}

	public function setNom( $nom): void {$this->nom = $nom;}

	public function setPrenom( $prenom): void {$this->prenom = $prenom;}

	public function setAdresse( $adresse): void {$this->adresse = $adresse;}

	public function setCp( $cp): void {$this->cp = $cp;}

	public function setVille( $ville): void {$this->ville = $ville;}

	public function setTelephone( $telephone): void {$this->telephone = $telephone;}

	
	
}