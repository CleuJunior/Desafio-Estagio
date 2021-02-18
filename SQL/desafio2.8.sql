CREATE TABLE tabela_telefone (
  id INT NOT NULL,
  telefone VARCHAR(200) NOT NULL,
  pessoa_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (id) REFERENCES tabela_pessoa(id)
  
);