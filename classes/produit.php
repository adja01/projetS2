<?php

namespace App\Entity;


class Produit{
    private $id;
    private $img;
    private $categorie;
    private $nom;
    private $prix;
    private int $idUser;
    
    public function __construct( $id,  $img,  $categorie,  $nom,  $prix, int $idUser){$this->id = $id;$this->img = $img;$this->categorie = $categorie;$this->nom = $nom;$this->prix = $prix;$this->idUser = $idUser;}
	

    public function getId() {return $this->id;}

	public function getImg() {return $this->img;}

	public function getCategorie() {return $this->categorie;}

	public function getNom() {return $this->nom;}

	public function getPrix() {return $this->prix;}

	public function getIdUser(): int {return $this->idUser;}

	
    public function setId( $id): void {$this->id = $id;}

	public function setImg( $img): void {$this->img = $img;}

	public function setCategorie( $categorie): void {$this->categorie = $categorie;}

	public function setNom( $nom): void {$this->nom = $nom;}

	public function setPrix( $prix): void {$this->prix = $prix;}

	public function setIdUser(Users $idUser): void {$this->idUser = $idUser;}

	














}
   