DROP DATABASE IF EXISTS lagerverwaltung;
CREATE DATABASE lagerverwaltung;
USE lagerverwaltung;

CREATE TABLE `Mitarbeiter` (
	`MitarbeiterNr` INT NOT NULL AUTO_INCREMENT,
	`Vorname` VARCHAR(50) NULL DEFAULT '0',
	`Nachname` VARCHAR(50) NULL DEFAULT '0',
	PRIMARY KEY(MitarbeiterNr)
);

CREATE TABLE `Arbeitszeiten` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`Von` TIMESTAMP NOT NULL,
	`Bis` TIMESTAMP NOT NULL,
	`Pause` VARCHAR(3) NOT NULL,
	`MitarbeiterNr` INT NOT NULL,
	PRIMARY KEY(ID),
	FOREIGN KEY(`MitarbeiterNr`) REFERENCES `Mitarbeiter`(`MitarbeiterNr`) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE `Produkt` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`Name` VARCHAR(100) NOT NULL,
	`Groeße` ENUM('klein','medium', 'groß'),
	PRIMARY KEY(ID)
);

CREATE TABLE `Regal` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`Etage` ENUM('1','2','3'),
	`Platz` ENUM('1','2','3','4','5','6','7','8','9','10'),
	`Produkt` INT NOT NULL,
	PRIMARY KEY(ID),
	FOREIGN KEY(`Produkt`) REFERENCES `Produkt`(`ID`) ON UPDATE CASCADE ON DELETE NO ACTION
);