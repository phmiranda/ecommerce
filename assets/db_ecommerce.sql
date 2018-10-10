/* @usuarios */
CREATE TABLE perfis(
  id_perfil INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(30) NOT NULL ,
  descricao LONGTEXT NULL DEFAULT 'N/A'
);

/* @usuarios */
CREATE TABLE usuarios(
  id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(255) NOT NULL ,
  email VARCHAR(100) NOT NULL ,
  senha VARCHAR (255) NOT NULL ,
  perfil_id INT NOT NULL ,
  FOREIGN KEY (perfil_id) REFERENCES perfis(id_perfil)
);

/* @categorias */
CREATE TABLE categorias(
  id_categoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(50) NOT NULL ,
  descricao LONGTEXT NULL DEFAULT 'N/A'
);

/* @situacao */
CREATE TABLE situacao (
  id_situacao INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(15) NOT NULL ,
  descricao LONGTEXT NULL DEFAULT 'N/A'
);

/* @produtos */
CREATE TABLE produtos(
  id_produto INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(100) NOT NULL ,
  preco DECIMAL (10,2) NOT NULL ,
  descricao LONGTEXT NULL DEFAULT 'N/A',
  categoria_id INT NOT NULL,
  situacao_id INT NOT NULL DEFAULT 1 ,
  FOREIGN KEY(categoria_id) REFERENCES categorias(id_categoria),
  FOREIGN KEY(situacao_id) REFERENCES situacao(id_situacao)
);