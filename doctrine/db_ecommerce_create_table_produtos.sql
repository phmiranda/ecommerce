CREATE TABLE produtos (
    id_produto INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    descricao LONGTEXT NULL ,
    categoria_id INT(11) NOT NULL,
    situacao_id INT(11) NOT NULL
);
