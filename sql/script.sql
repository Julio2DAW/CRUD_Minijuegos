CREATE DATABASE IF NOT EXISTS minijuegos DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE minijuegos;

CREATE TABLE niveles (
  idNivel int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  puntuacion int NOT NULL,
  vida int NOT NULL,
  velocidad int NOT NULL,
  bolas int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO niveles (puntuacion, vida, velocidad, bolas) VALUES
(100, 80, 100, 5),
(100, 70, 120, 10),
(100, 60, 140, 15),
(100, 50, 160, 20),
(100, 40, 180, 25);

CREATE TABLE partida (
  id_partida int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_minijuego int NOT NULL,
  nick varchar(40) NOT NULL,
  puntuacion int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO partida (id_minijuego, nick, puntuacion) VALUES
(1, 'jack', 100),
(2, 'Don', 90),
(2, 'mani', 90),
(4, 'chaterman', 60),
(4, 'loquillo', 30),
(4, 'bulky', 80),
(4, 'lomban', 70),
(4, 'rex-t', 50),
(4, 'kulboy', 20);