use shopping;

insert into categoria (nome, descrizione) values ("Eletronica", "Roba tecnologica");

insert into sottoCategoria (nome, descrizione, categoria) values ("Cellulari", "Dispositivi mobili per chiamare", 
    ( select id_c from categoria where nome = "Eletronica"));

insert into marca (nome, descrizione) values ("Samsung", "");

insert into oggetto (nome, marca, prezzo, descrizione) values ("Galaxy S Advance", 
    (select id_m from marca where nome = "Samsung"),
    199.98, "Telefono figo <br> lol");

insert into immagine (link, id_o) values ("img/obj/samsung/galaxysadvance01.jpg",
    (select id_o from oggetto where nome = "Galaxy S Advance"));
