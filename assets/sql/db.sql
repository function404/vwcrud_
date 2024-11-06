-- Date: 2024-04-11

-- Create database
CREATE database vwcrud;

-- Use database
USE vwcrud;

-- Create tables
CREATE TABLE vwcrud.models (
	idModels INT UNSIGNED AUTO_INCREMENT,
    nameModels VARCHAR(100) NOT NULL,
	typeModels VARCHAR(100) NOT NULL,
    colorModels VARCHAR(100) NOT NULL,
    photoModels BLOB NOT NULL,
    availabilityModel BOOLEAN NOT NULL,
    PRIMARY KEY(idModels)
);
 
CREATE TABLE vwcrud.users (
	idUser INT UNSIGNED AUTO_INCREMENT,
    nameUser VARCHAR(150) NOT NULL,
	emailUser VARCHAR(255) NOT NULL,
    passwordUser VARCHAR(150) NOT NULL,
    adminUser BOOLEAN NOT NULL,
    PRIMARY KEY(idUser)
);