/* comentários */
CREATE TABLE categorias (
  id_categoria INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(30) NOT NULL
);

/* comentários */
CREATE TABLE produtos (
  id_produto INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(100) NOT NULL,
  preco DECIMAL(10,2) NOT NULL,
  descricao LONGTEXT NULL ,
  categoria_id INT(11) NOT NULL,
  situacao_id INT(11) NOT NULL
);

/* comentários */
CREATE TABLE situacao (
  id_situacao INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(30) NOT NULL
);

/* comentários */
CREATE TABLE usuarios (
  id_usuario INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(255) NOT NULL
);
