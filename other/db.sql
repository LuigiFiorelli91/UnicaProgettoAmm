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

create table telefono (
    id_o int NOT NULL,
    schermo float, /*pollici*/
    xSchermo int,
    ySchermo int,
    peso float, /*grammi*/
    batteria int, /*mah*/
    ram int, /*megabyte*/
    hd int,
    pro char(100),
    mhzPro int,
    core int,
    so char(100)
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
    disp int DEFAULT 0,
    descrizione text(1000),
    vis int DEFAULT 0,
    PRIMARY KEY (id_o)
);

create table immagine (
    id_m int NOT NULL AUTO_INCREMENT,
    link char(249),
    id_o int,
    PRImARY KEY(id_m)
);
    