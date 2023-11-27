CREATE DATABASE notas;

CREATE TABLE notas (
  id int NOT NULL AUTO_INCREMENT,
  titulo varchar(255) NOT NULL,
  contenido text NOT NULL,
  modificacion date NOT NULL,
  idbuscar varchar(255) NOT NULL UNIQUE,
  PRIMARY KEY (id)
);
  
