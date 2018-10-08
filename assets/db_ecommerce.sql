/* @usuarios */
CREATE TABLE perfis(
  id_perfil INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR() NOT NULL ,
  descricao LONGTEXT NULL DEFAULT "N/A"
);

/* @usuarios */
CREATE TABLE usuarios(
  id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(255) NOT NULL ,
  email VARCHAR(100) NOT NULL ,
  senha VARCHAR (255) NOT NULL 
);

/* @categorias */
CREATE TABLE categorias(
  id_categoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(50) NOT NULL ,
  descricao LONGTEXT NULL DEFAULT "N/A"
);

/* @situacao */
CREATE TABLE situacao (
  id_situacao INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome_situacao VARCHAR(15) NOT NULL ,
  descricao LONGTEXT NULL DEFAULT "N/A"
);

/* @produtos */
CREATE TABLE produtos(
  id_produto INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(100) NOT NULL ,
  preco DECIMAL (10,2) NOT NULL ,
  descricao LONGTEXT NULL DEFAULT "N/A",
  categoria_id INT NOT NULL,
  situacao_id INT NOT NULL DEFAULT 1 ,
  FOREIGN KEY(categoria_id) REFERENCES categorias(id_categoria),
  FOREIGN KEY(situacao_id) REFERENCES situacao(id_situacao)
);

