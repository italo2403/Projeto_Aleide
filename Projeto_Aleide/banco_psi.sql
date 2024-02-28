create database psico;
use psico;

-- create table Fun(
-- id_fun integer primary key auto_increment,
-- gestor varchar(120),
-- psico_aleide  varchar(120),
-- professor  varchar(120)
-- );

CREATE TABLE login (
    id_log INTEGER PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    funcao VARCHAR(20) NOT NULL
);


create table aluno(
id_alu INTEGER PRIMARY KEY AUTO_INCREMENT,
turma varchar(255), 
pro varchar(255), 
cara varchar(255)
);

select * from aluno;






drop table login;


select email, senha from login;

create table alunos(
id_alu integer primary key auto_increment,
matricula varchar(120),
caracteristicas varchar(255),
problema varchar(255),
turma varchar(255)
);
-- drop table alunos;

-- show tables;
-- drop database psico;
