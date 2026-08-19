create database pratos_alana_nicole_m3
use pratos_alana_nicole_m3;

create table usuarios (
    id int auto_increment primary key,
    nome varchar(100) not null,
    email varchar(150) not null unique
);

create table pratos (
    id int auto_increment primary key,
    usuario_id int not null,
    nome varchar(100) not null,
    descricao text not null,
    preco decimal(10,2) not null,
    categoria varchar(100) not null,

   foreign key (usuario_id) references usuarios(id)
        on delete cascade
        on update cascade
);