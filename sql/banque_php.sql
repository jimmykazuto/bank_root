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