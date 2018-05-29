CREATE TABLE categorias(
  id_categoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(25) NOT NULL ,
  descricao LONGTEXT NULL ,
  status BOOLEAN NOT NULL
);

CREATE TABLE produtos(
  id_produto INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(50) NOT NULL ,
  descricao LONGTEXT NULL ,
  valor DOUBLE (10,2) NOT NULL ,
  categoria_id INT NOT NULL ,
  FOREIGN KEY (categoria_id) REFERENCES categorias(id_categoria)
);
