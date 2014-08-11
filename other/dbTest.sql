use shopping;

insert into categoria (nome, descrizione) values ("Eletronica", "Roba tecnologica");
insert into categoria (nome, descrizione) values ("Libri", "Roba cartacea");
insert into categoria (nome, descrizione) values ("Fai da te", "Roba in legno");
insert into categoria (nome, descrizione) values ("Casa e cucina", "Roba tecnologica");

insert into sottoCategoria (nome, descrizione, categoria) values ("Cellulari", "Dispositivi mobili per chiamare", 
    ( select id_c from categoria where nome = "Eletronica"));
insert into sottoCategoria (nome, descrizione, categoria) values ("Tablet", "Dispositivi mobili", 
    ( select id_c from categoria where nome = "Eletronica"));
insert into sottoCategoria (nome, descrizione, categoria) values ("Televisori", "Televisori ditutti i tipi", 
    ( select id_c from categoria where nome = "Eletronica"));

insert into sottoCategoria (nome, descrizione, categoria) values ("Fantasy", "Libri fantasy", 
    ( select id_c from categoria where nome = "Libri"));

insert into marca (nome, descrizione) values ("Samsung", "");
insert into marca (nome, descrizione) values ("Nokia", "");
insert into marca (nome, descrizione) values ("Apple", "");
insert into marca (nome, descrizione) values ("Lg", "");
insert into marca (nome, descrizione) values ("Motorola", "");
insert into marca (nome, descrizione) values ("Sony", "");
insert into marca (nome, descrizione) values ("Salani", "");

/*Galaxy S Advance*/
insert into oggetto (nome, marca, prezzo, descrizione) values ("Galaxy S Advance", 
    (select id_m from marca where nome = "Samsung" limit 1),
    199.98, "Telefono figo <br> lol");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome = "Galaxy S Advance" limit 1),
    (select id_s from sottoCategoria where nome = "Cellulari" limit 1 ));
insert into immagine (link, id_o) values ("img/obj/samsung/galaxysadvance01.jpg",
    (select id_o from oggetto where nome = "Galaxy S Advance"));
insert into telefono (id_o, schermo, xSchermo, ySchermo, peso, batteria, ram, hd, pro, mhzPro, core, so) 
    values ((select id_o from oggetto where nome = "Galaxy S Advance" limit 1),
            4, 480, 800, 118, 1550, 756, 8000,"" ,1024, 2, "Android 3.6");

/*Iphone 5*/
insert into oggetto (nome, marca, prezzo, descrizione) values ("Iphone 5", 
    (select id_m from marca where nome = "Apple" limit 1),
    699.98, "Telefono costoso");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome = "Iphone 5" limit 1),
    (select id_s from sottoCategoria where nome = "Cellulari" limit 1 ));
insert into immagine (link, id_o) values ("img/obj/apple/iphone501.jpg",
    (select id_o from oggetto where nome = "Iphone 5"));
insert into telefono (id_o, schermo, xSchermo, ySchermo, peso, batteria, ram, hd, pro, mhzPro, core, so) 
    values ((select id_o from oggetto where nome = "Iphone 5" limit 1),
            null, null, null, null, null, null, null, null, null, null, null);

/*Lg G2*/
insert into oggetto (nome, marca, prezzo, descrizione) values ("G2", 
    (select id_m from marca where nome = "Lg" limit 1),
    399.98, "");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome = "G2" limit 1),
    (select id_s from sottoCategoria where nome = "Cellulari" limit 1 ));
insert into immagine (link, id_o) values ("img/obj/lg/g201.jpg",
    (select id_o from oggetto where nome = "G2"));
insert into telefono (id_o, schermo, xSchermo, ySchermo, peso, batteria, ram, hd, pro, mhzPro, core, so) 
    values ((select id_o from oggetto where nome = "G2" limit 1),
            null, null, null, null, null, null, null, null, null, null, null);

/*Motorola Moto G*/
insert into oggetto (nome, marca, prezzo, descrizione) values ("Moto G", 
    (select id_m from marca where nome = "Motorola" limit 1),
    169.98, "");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome = "Moto G" limit 1),
    (select id_s from sottoCategoria where nome = "Cellulari" limit 1 ));
insert into immagine (link, id_o) values ("img/obj/motorola/motog01.jpg",
    (select id_o from oggetto where nome = "Moto G"));
insert into telefono (id_o, schermo, xSchermo, ySchermo, peso, batteria, ram, hd, pro, mhzPro, core, so) 
    values ((select id_o from oggetto where nome = "Moto G" limit 1),
            null, null, null, null, null, null, null, null, null, null, null);

/*Motorola Moto X*/
insert into oggetto (nome, marca, prezzo, descrizione) values ("Moto X", 
    (select id_m from marca where nome = "Motorola" limit 1),
    299.98, "");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome = "Moto X" limit 1),
    (select id_s from sottoCategoria where nome = "Cellulari" limit 1 ));
insert into immagine (link, id_o) values ("img/obj/motorola/motox01.jpg",
    (select id_o from oggetto where nome = "Moto X"));
insert into telefono (id_o, schermo, xSchermo, ySchermo, peso, batteria, ram, hd, pro, mhzPro, core, so) 
    values ((select id_o from oggetto where nome = "Moto X" limit 1),
            null, null, null, null, null, null, null, null, null, null, null);

/*Samsung Galaxy S3*/
insert into oggetto (nome, marca, prezzo, descrizione) values ("Galaxy S3", 
    (select id_m from marca where nome = "Samsung" limit 1),
    299.98, "");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome = "Galaxy S3" limit 1),
    (select id_s from sottoCategoria where nome = "Cellulari" limit 1 ));
insert into immagine (link, id_o) values ("img/obj/samsung/galaxys301.jpg",
    (select id_o from oggetto where nome = "Galaxy S3"));
insert into telefono (id_o, schermo, xSchermo, ySchermo, peso, batteria, ram, hd, pro, mhzPro, core, so) 
    values ((select id_o from oggetto where nome = "Galaxy S3" limit 1),
            null, null, null, null, null, null, null, null, null, null, null);

/*Samsung Galaxy S5*/
insert into oggetto (nome, marca, prezzo, descrizione) values ("Galaxy S5", 
    (select id_m from marca where nome = "Samsung" limit 1),
    699.98, "");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome = "Galaxy S5" limit 1),
    (select id_s from sottoCategoria where nome = "Cellulari" limit 1 ));
insert into immagine (link, id_o) values ("img/obj/samsung/galaxys501.jpg",
    (select id_o from oggetto where nome = "Galaxy S5"));
insert into telefono (id_o, schermo, xSchermo, ySchermo, peso, batteria, ram, hd, pro, mhzPro, core, so) 
    values ((select id_o from oggetto where nome = "Galaxy S5" limit 1),
            null, null, null, null, null, null, null, null, null, null, null);


/*Tablet*/


/*Tv*/
/*Samsung T22C300EW TV LCD*/
insert into oggetto (nome, marca, prezzo, descrizione) values ("TV LCD T22C300EW 22 FullHd", 
    (select id_m from marca where nome = "Samsung" limit 1),
    128.42, "");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome = "TV LCD T22C300EW 22 FullHd" limit 1),
    (select id_s from sottoCategoria where nome = "Televisori" limit 1 ));

/*Libri*/
/*HP*/
/*
insert into oggetto (nome, marca, prezzo, descrizione) values ("Harry Potter e la pietra filosofale", 
    (select id_m from marca where nome = "Salani" limit 1),
    9.99, "");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome like "Harry Potter e la pietra filosofale" limit 1),
    (select id_s from sottoCategoria where nome = "Fantasy" limit 1 ));

insert into oggetto (nome, marca, prezzo, descrizione) values ("Harry Potter e la camera dei segreti", 
    (select id_m from marca where nome = "Salani" limit 1),
    9.99, "");
insert into soca_og (id_o, id_s) values (
    (select id_o from oggetto where nome like "Harry Potter e la camera dei segreti" limit 1),
    (select id_s from sottoCategoria where nome = "Fantasy" limit 1 ));
*/