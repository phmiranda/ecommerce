/* comentário */
CREATE TABLE usuarios(
  id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(255) NOT NULL ,
  cpf VARCHAR(14) NOT NULL ,
  data_nascimento DATE NOT NULL ,
  sexo INT NOT NULL ,
  perfil_id INT NOT NULL ,
  FOREIGN KEY(perfil_id) REFERENCES perfis(id_perfil)
);

/* comentários */
CREATE TABLE perfis(
  id_perfil INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(50) NOT NULL ,
  descricao LONGTEXT NULL
);

/* comentários */
CREATE TABLE categorias(
  id_categoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(50) NOT NULL ,
  situacao INT NOT NULL ,
  descricao LONGTEXT NULL
);

/* comentários */
CREATE TABLE produtos(
  id_produto INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nome VARCHAR(100) NOT NULL ,
  preco DOUBLE(10,2) NOT NULL ,
  descricao LONGTEXT NULL ,
  categoria_id INT NOT NULL ,
  FOREIGN KEY(categoria_id) REFERENCES categorias(id_categoria)
);