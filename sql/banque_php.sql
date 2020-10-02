DROP DATABASE banque_php;
CREATE DATABASE banque_php;
CREATE TABLE utilisateur
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR (30) NOT NULL,
    prenom VARCHAR (30) NOT NULL,
    email VARCHAR (50) NOT NULL,
    mot_de_passe VARCHAR (15) NOT NULL,
    pays VARCHAR (50) NOT NULL,
    adresse VARCHAR (50) NOT NULL,
    code_postal VARCHAR (10) NOT NULL,
    ville VARCHAR (50) NOT NULL
);
CREATE TABLE compte
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type_compte VARCHAR (30) NOT NULL,
    numero_de_compte VARCHAR (30) NOT NULL,
    creation_compte DATE NOT NULL
);
CREATE TABLE operation
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type_operation VARCHAR (50) NOT NULL,
    montant_operation INT NOT NULL,
    date_operation DATETIME NOT NULL,
    solde_compte INT NOT NULL,
    compte_origine VARCHAR (50) NOT NULL,
    compte_destinataire VARCHAR (50) NOT NULL
);