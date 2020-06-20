CREATE DATABASE PLATFORM_GAME;

USE PLATFORM_GAME;

CREATE TABLE Usuario(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(120),
    data_nascimento DATE,
    data_cadastro TIMESTAMP ,
    password VARCHAR(50),
    cfp VARCHAR(15),
    estudio VARCHAR(120),
    descricao VARCHAR(150),
    tipo VARCHAR(120)
);

CREATE TABLE Jogo(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(120),
    descricao TEXT ,
    thumb_url TEXT,
	dowload_url TEXT,
    dispositivo VARCHAR(60),
    id_usuario INT NULL,
	CONSTRAINT FK_Desenvolvedor FOREIGN KEY (id_usuario) REFERENCES Usuario(id)
);


CREATE TABLE Biblioteca (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_Usuario INT NOT NULL,
id_Jogo INT NOT NULL,
CONSTRAINT FK_Jogo FOREIGN KEY (id_Jogo) REFERENCES Jogo(id),
CONSTRAINT FK_Usuario FOREIGN KEY (id_Usuario) REFERENCES Usuario(id)
);

select * from jogo;
select * from usuario;
INSERT INTO Biblioteca(id_Usuario, id_Jogo) values(1,1);

CREATE VIEW user_biblioteca AS(
	SELECT B.id AS 'ID_BIBLIOTECA', U.id AS 'ID_USUARIO', J.id AS 'ID_JOGO', U.usuario, J.titulo, J.descricao, J.thumb_url, J.dowload_url, J.dispositivo FROM Biblioteca AS B 
	INNER JOIN Usuario AS U  ON B.id_Usuario = U.id
	INNER JOIN Jogo AS J ON J.id = B.id_Jogo ORDER BY J.titulo ASC
);
