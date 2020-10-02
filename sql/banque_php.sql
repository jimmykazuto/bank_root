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
    date_creation_compte DATE NOT NULL
);
CREATE TABLE operation
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type_operation VARCHAR (50) NOT NULL,
    montant_operation INT NOT NULL,
    date_operation DATETIME NOT NULL,
    solde_compte INT NOT NULL,
    compte_origine_debit VARCHAR (50),
    compte_destinataire_credit VARCHAR (50)
);
INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, pays, adresse, code_postal, ville)
 VALUES ('banquePHP', 'eskuhell', 'banquePHP@cnul.fr', 'i8m2p', 'france', '9 rue de la bdd', 01010, 'code'),
        ('lerouxel', 'aurelie', 'aurelielerouxel@cacraint.fr', 'lol', 'france', '9 rue du buisson', 27180, 'st sebastien du mordor');
 INSERT INTO compte (type_compte, numero_de_compte, date_creation_compte)
 VALUES ('livret_a', '0256kih2487', '2009/10/02'),
        ('compte_courant', '2489fsf5487', '2006/08/19'),
        ('compte_courant', '1464lol7458', '2001/04/24');
 INSERT INTO operation (type_operation, montant_operation, date_operation, solde_compte, compte_origine_debit, compte_destinataire_credit)
 VALUES ('transfert', -1250, '03/10/2019 21:56:12', 1247.20,' livret_a', 'compte_courant'),
        ('leclerc', -60.25, '01/10/2020 14:01:32', 1624.68, 'compte_courant', 'NULL');
