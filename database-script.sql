create database NOME_DO_BANCO;

use NOME_DO_BANCO;

create table produto(
pro_id integer primary key auto_increment,
pro_nome varchar(40) not null,
pro_descricao varchar(255) not null,
pro_preco double not null,
pro_url varchar(255)
)engine=InnoDB;