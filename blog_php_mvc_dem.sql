CREATE DATABASE blog_php_mvc;

CREATE TABLE posts (
id INT NOT NULL AUTO_INCREMENT , 
author VARCHAR(30) NOT NULL , 
content TEXT NOT NULL , 
titol VARCHAR(30) NOT NULL , 
id_categoria INT NOT NULL , 
image VARCHAR(512) NOT NULL , 
creacio DATETIME NOT NULL,
modificacio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP 
PRIMARY KEY (id)
) ENGINE = InnoDB;

INSERT INTO posts (id, author, content, titol, id_categoria, image, creacio, modificacio) VALUES 
	(NULL, 'Deme', 'aaaaaa', 'Prova 1', '2', '', '', CURRENT_TIMESTAMP), 
	(NULL, 'Albert', 'bbbbbb', 'Prova 2', '1', '', '', CURRENT_TIMESTAMP), 
	(NULL, 'Demetrio', 'xxxxxxx', 'Prova 3', '3', '', '', CURRENT_TIMESTAMP);

CREATE TABLE categoria (
id INT NOT NULL AUTO_INCREMENT , 
nom VARCHAR(30) NOT NULL , 
sub-categoria ENUM('Ninguno','Sistemas','Programacion','Otros') NOT NULL , 
creacio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
PRIMARY KEY (id)
) ENGINE = InnoDB;

INSERT INTO categoria (id, nom, sub_categoria, creacio) VALUES 
	(NULL, 'PHP', 'Programacion', CURRENT_TIMESTAMP), 
	(NULL, 'Linux', 'Sistemas', CURRENT_TIMESTAMP), 
	(NULL, 'JAVA', 'Programacion', CURRENT_TIMESTAMP);