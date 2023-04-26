create database tarefas;
use tarefas;
create table tarefa(id int not null auto_increment primary key, 
descricao varchar(255),
status char(1) default 'A');