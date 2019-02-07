/* comentários */
CREATE TABLE `categorias` (
  id_categoria int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome varchar(30) NOT NULL
);

/* comentários */
CREATE TABLE `produtos` (
  id_produto int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome varchar(100) NOT NULL,
  preco decimal(10,2) NOT NULL,
  descricao LONGTEXT NULL ,
  categoria_id int(11) NOT NULL,
  situacao_id int(11) NOT NULL
);

/* comentários */
CREATE TABLE situacao (
  id_situacao int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome varchar(30) NOT NULL
);

/* comentários */
CREATE TABLE usuarios (
  id_usuario int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome varchar(255) NOT NULL,
  email varchar(100) NOT NULL,
  senha varchar(255) NOT NULL
);
