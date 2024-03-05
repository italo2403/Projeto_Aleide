create database psico;
use psico;

-- tabela onde estão cadastrados os usuários com acesso ao conteúdo todo do sistema

CREATE TABLE login (
    id_log INTEGER PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    funcao VARCHAR(20) NOT NULL
);
-- Inserindo dados padrões do usuário para acessar o banco de dados sem precisar 
-- criar tela de login

insert into login (email, senha, funcao) values ('italonunespereira@pe.senac.br', '1234', 'professor');
insert into login (email, senha, funcao) values ('aleide@pe.senac.br', '1234', 'psicologo');
insert into login (email, senha, funcao) values ('edson', '1234', 'gestor');

-- Tabela de Cadastro de informações dos Alunos
create table aluno(
id_alu INTEGER PRIMARY KEY AUTO_INCREMENT,
turma varchar(255), 
pro varchar(255), 
cara varchar(255)
);
-- Adicionado para modificar e ter o nome do professor no painel
 alter table aluno add column nome_prof varchar(120);
alter table aluno add column nome_aluno varchar(255);

select * from aluno;
-- Apagando a tabela Login de usuários
drop table login;

-- Apagando a tabela Alunos
drop table aluno;

-- Apagando o Banco de Dados
drop database psico;
