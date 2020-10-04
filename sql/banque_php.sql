-- delete the user if it is already present in the database
DROP USER IF EXISTS "banquePHP'@'localhost";

-- create a user account with management rights on the database
CREATE USER "banquePHP'@'localhost" IDENTIFIED BY 'banquePHP';

-- delete the database if it already exists
DROP DATABASE banque_php;

-- create a database 
CREATE DATABASE banque_php DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- give rights to the created user
GRANT ALL ON `banque_php`.* TO 'banquePHP'@'localhost';

CREATE TABLE Users
(
    UserID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    UserName VARCHAR (30) NOT NULL,
    UserLastName VARCHAR (30) NOT NULL,
    UserEmail VARCHAR (50) NOT NULL,
    UserPassword VARCHAR (15) NOT NULL,
    UserCountry VARCHAR (50) NOT NULL,
    UserAddress VARCHAR (50) NOT NULL,
    UserPostalCode VARCHAR (10) NOT NULL,
    UserCity VARCHAR (50) NOT NULL
);
-- creation of data rows in the table
INSERT INTO Users (UserName, UserLastName, UserEmail, UserPassword, UserCountry, UserAddress, UserPostalCode, UserCity)
VALUES ('lerouxel', 'aurelie', 'aurelielerouxel@cacraint.fr', 'lol', 'france', '9 rue du buisson', 27180, 'st sebastien du mordor'),
    ('Penneflamme', 'Katty', 'tunes@pas.fr', 'i8m2p', 'france', '2 notre', 01010, 'galaxie');

CREATE TABLE Account
(
    AccountID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    AccountType VARCHAR (30) NOT NULL,
    AccountNumber VARCHAR (30) NOT NULL,
    AccountCreationDate DATE NOT NULL
);
INSERT INTO Account (AccountType, AccountNumber, AccountCreationDate)
VALUES ('livret_a', '0256kih2487', '2009/10/02'),
    ('compte_courant', '2489fsf5487', '2006/08/19'),
    ('compte_courant', '1464lol7458', '2001/04/24');

CREATE TABLE Operation
(
    OperationID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    OperationType VARCHAR (50) NOT NULL,
    OperationPrice INT NOT NULL,
    OperationDate DATETIME NOT NULL,
    Account_balance INT NOT NULL,
    AccountDebitOriginal VARCHAR (50),
    AccountRecipientCredit VARCHAR (50)

);
INSERT INTO Operation (OperationType, OperationPrice, OperationDate, Account_balance, AccountDebitOriginal, AccountRecipientCredit)
VALUES ('transfert', -1250, '2019/10/03 21:56:12', 1247.20,' livret_a', 'compte_courant'),
    ('leclerc', -60.25, '2020/10/01 14:01:32', 1624.68, 'compte_courant', 'NULL');

-- ALTER TABLE Operation
-- ADD FOREIGN KEY (AccountID) REFERENCES
-- Account (AccountID);