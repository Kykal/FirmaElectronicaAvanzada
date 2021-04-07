CREATE DATABASE admonmc

USE admonmc

CREATE TABLE users (
	id INT PRIMARY KEY IDENTITY (1,1) not null,
	nombre VARCHAR(100) not null,
	correoE VARCHAR(100) not null,
	contra VARCHAR(100) not null
);

CREATE TABLE docs (

	id INT PRIMARY KEY IDENTITY (1,1) not null,
	pdfFile VARCHAR(MAX) not null,
	keyFile VARCHAR(MAX) not null,
	cerFile VARCHAR(MAX) not null
);

CREATE TABLE firma (
	id INT PRIMARY KEY IDENTITY (1,1) not null,
	nombre VARCHAR(100) not null,
	RFC VARCHAR(100) not null,
	pdfFile VARCHAR(MAX) not null,
	cerFile VARCHAR(MAX) not null,
	keyFile VARCHAR(MAX) not null
);