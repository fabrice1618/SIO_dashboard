-- Création de la base de données
CREATE DATABASE IF NOT EXISTS dashboard;
USE dashboard;

CREATE USER IF NOT EXISTS 'dash'@'localhost' IDENTIFIED BY 'D45H';
GRANT ALL PRIVILEGES ON dashboard.* TO 'dash'@'localhost';
CREATE USER IF NOT EXISTS 'dash'@'%' IDENTIFIED BY 'D45H';
GRANT ALL PRIVILEGES ON dashboard.* TO 'dash'@'%';
FLUSH PRIVILEGES;

CREATE TABLE utilisateur(
   id_user INT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   identifiant VARCHAR(50) NOT NULL,
   password VARCHAR(50) NOT NULL,
   salt VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_user)
); 

CREATE TABLE lecture_rfid(
   id_rfid INT,
   date_lecture DATETIME NOT NULL,
   code_rfid INT NOT NULL,
   autorise TINYINT(1) NOT NULL,
   PRIMARY KEY(id_rfid)
);

CREATE TABLE radar(
   id_radar INT,
   date_lecture DATETIME NOT NULL,
   presence TINYINT(1) NOT NULL,
   distance INT NOT NULL,
   PRIMARY KEY(id_radar)
);

CREATE TABLE rfid_autorise(
   id_liste_rfid INT,
   code VARCHAR(20) NOT NULL,
   etat_rfid TINYINT(1) NOT NULL,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   PRIMARY KEY(id_liste_rfid)
);

CREATE TABLE EMV4(
   id_emv4 INT,
   date_lecture DATETIME NOT NULL,
   temperature DECIMAL(9,2) NOT NULL,
   humidite INT NOT NULL,
   pression INT NOT NULL,
   PRIMARY KEY(id_emv4)
);

CREATE TABLE SCD40(
   id_scd40 INT,
   date_lecture DATETIME NOT NULL,
   temperature DECIMAL(9,2) NOT NULL,
   humidite INT NOT NULL,
   co2 INT NOT NULL,
   PRIMARY KEY(id_scd40)
)ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Insertion de données dans la table utilisateur
INSERT INTO utilisateur (id_user, nom, prenom, identifiant, password, salt)
VALUES
(1, 'Dupont', 'Jean', 'jdupont', 'azerty123', 'salty1'),
(2, 'Martin', 'Claire', 'cmartin', 'passw0rd', 'salty2'),
(3, 'Durand', 'Luc', 'ldurand', 'monmdp', 'salty3');

-- Insertion de données dans la table lecture_rfid
INSERT INTO lecture_rfid (id_rfid, date_lecture, code_rfid, autorise)
VALUES
(1, NOW(), 123456, 1),
(2, NOW() - INTERVAL 5 MINUTE, 654321, 0),
(3, NOW() - INTERVAL 10 MINUTE, 112233, 1);

-- Insertion de données dans la table radar
INSERT INTO radar (id_radar, date_lecture, presence, distance)
VALUES
(1, NOW(), 1, 75),
(2, NOW() - INTERVAL 2 MINUTE, 0, 0),
(3, NOW() - INTERVAL 4 MINUTE, 1, 32);

-- Insertion de données dans la table rfid_autorise
INSERT INTO rfid_autorise (id_liste_rfid, code, etat_rfid, nom, prenom)
VALUES
(1, '123456', 1, 'Dupont', 'Jean'),
(2, '654321', 0, 'Anonyme', NULL),
(3, '112233', 1, 'Durand', 'Luc');

-- Insertion de données dans la table EMV4
INSERT INTO EMV4 (id_emv4, date_lecture, temperature, humidite, pression)
VALUES
(1, NOW(), 22.5, 45, 1012),
(2, NOW() - INTERVAL 10 MINUTE, 23.1, 50, 1013),
(3, NOW() - INTERVAL 20 MINUTE, 21.8, 48, 1011);

-- Insertion de données dans la table SCD40
INSERT INTO SCD40 (id_scd40, date_lecture, temperature, humidite, co2)
VALUES
(1, NOW(), 22.7, 46, 420),
(2, NOW() - INTERVAL 6 MINUTE, 23.0, 47, 425),
(3, NOW() - INTERVAL 12 MINUTE, 22.3, 44, 410);

