drop database if exists projet_git;
create database projet_git;
use projet_git;

create table users(
id INT not null auto_increment,
nom varchar(50) not null,
prenom varchar(50) not null,
Email varchar(50) not null,
constraint pk_societe primary key(id)
);