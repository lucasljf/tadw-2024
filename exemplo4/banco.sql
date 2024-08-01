CREATE DATABASE projetoAlunos;
USE projetoAlunos;

CREATE TABLE tb_situacao (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(20) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE tb_aluno (
    id INT NOT NULL AUTO_INCREMENT,
    idSituacao INT NOT NULL,
    nome VARCHAR(80) NOT NULL,
    dataCadastro TIMESTAMP NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(idSituacao) REFERENCES tb_situacao (id)
);

INSERT INTO tb_situacao (nome) VALUES ("Cursando");
INSERT INTO tb_situacao (nome) VALUES ("Transferido");
INSERT INTO tb_aluno (idSituacao, nome) VALUES (1, "Fulano");
INSERT INTO tb_aluno (idSituacao, nome) VALUES (1, "Ciclano");
INSERT INTO tb_aluno (idSituacao, nome) VALUES (2, "Exemplo");
INSERT INTO tb_aluno (idSituacao, nome) VALUES (1, "Teste");