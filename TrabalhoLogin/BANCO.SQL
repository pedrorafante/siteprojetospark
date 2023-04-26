CREATE DATABASE cadastro_trabalho;
USE cadastro_trabalho;
create table usuarios(
id int auto_increment not null,
nome varchar(255) not null,
email varchar(255) not null,
senha varchar (255) not null,
primary key (id)
);