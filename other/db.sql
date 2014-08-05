drop database IF EXISTS shopping;
create database IF NOT EXISTS shopping;

use shopping;

create table categoria (
    id_c int NOT NULL AUTO_INCREMENT,
    nome char(30),
    descrizione text(1000),
    PRIMARY KEY (id_c)
);

create table sottoCategoria (
    id_s int NOT NULL AUTO_INCREMENT,
    nome char(30),
    descrizione text(1000),
    categoria int,
    PRIMARY KEY (id_s)
);

create table SoCa_Og (
    id_o int,
    id_s int,
    PRIMARY KEY (id_o,id_s)
);

create table marca (
    id_m int NOT NULL AUTO_INCREMENT,
    nome char(30),
    descrizione text(1000),
    PRIMARY KEY (id_m)
);

create table oggetto (
    id_o int NOT NULL AUTO_INCREMENT,
    nome char(30),
    marca int,
    prezzo float,
    descrizione text(1000),
    PRIMARY KEY (id_o)
);

create table immagine (
    id_m int NOT NULL AUTO_INCREMENT,
    link char(249),
    id_o int,
    PRImARY KEY(id_m)
);
    