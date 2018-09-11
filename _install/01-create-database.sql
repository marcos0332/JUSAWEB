create database jusaweb;

use jusaweb;

create table tblUsuario(
id int(20) NOT NULL PRIMARY KEY auto_increment,
nombre varchar (30) NOT NULL,
usuario varchar (30) NOT NULL,
password varchar (30) NOT NULL,
email varchar (100) NOT NULL
);