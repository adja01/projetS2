CREATE TABLE client(
   id INT NOT NULL AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   adresse VARCHAR(50) NOT NULL,
   cp INT (5) NOT NULL,
   ville VARCHAR(50) NOT NULL,
   telephone INT (20) NOT NULL,
   PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   mdp VARCHAR(50) NOT NULL,
   login VARCHAR(50) NOT NULL,
   PRIMARY KEY(id),
   UNIQUE(mdp),
   UNIQUE(login)
)ENGINE=InnoDB;

CREATE TABLE produit(
   id INT NOT NULL AUTO_INCREMENT,
   categorie VARCHAR(50) NOT NULL,
   nom VARCHAR(50) NOT NULL,
   prix INT (40) NOT NULL,
   idUser INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(idUser) REFERENCES users(id)
)ENGINE=InnoDB;

CREATE TABLE acheter(
   id INT NOT NULL AUTO_INCREMENT,
   idProduit INT NOT NULL ,
   idClient INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(idProduit) REFERENCES produit(id),
   FOREIGN KEY(idClient) REFERENCES client(id)
)ENGINE=InnoDB;
