DROP SCHEMA PROJETO;
CREATE SCHEMA PROJETO;
USE PROJETO;
DROP TABLE IF EXISTS BANDA;
DROP TABLE IF EXISTS CLIENTE;
DROP TABLE IF EXISTS DESPESA;
DROP TABLE IF EXISTS EQUIPAMENTO;
DROP TABLE IF EXISTS HORARIO;
DROP TABLE IF EXISTS MARCA;
DROP TABLE IF EXISTS PRODUTO;
DROP TABLE IF EXISTS RECEITA;
DROP TABLE IF EXISTS CAT_APLICACAO;
DROP TABLE IF EXISTS CAT_PRODUTO;
DROP TABLE IF EXISTS CAT_RECURSO;

CREATE TABLE CAT_APLICACAO (
	id_ap_receita INT AUTO_INCREMENT,
    nome_aplicacao VARCHAR(255),
    CONSTRAINT pk_cat_aplicao PRIMARY KEY (id_ap_receita)
);

CREATE TABLE CAT_PRODUTO (
	id_cat_produto INT AUTO_INCREMENT,
    nome_cat_produto VARCHAR(50) NOT NULL,
    UNIQUE (nome_cat_produto),
    CONSTRAINT pk_cat_produto PRIMARY KEY (id_cat_produto)
);

CREATE TABLE CAT_RECURSO (
	id_cat_recurso INT AUTO_INCREMENT,
    nome_cat_recurso VARCHAR(255),
    CONSTRAINT pk_cat_recurso PRIMARY KEY (id_cat_recurso)
);

CREATE TABLE MARCA (
	id_marca INT AUTO_INCREMENT,
	nome_marca VARCHAR(50) NOT NULL,
    UNIQUE (nome_marca),
    CONSTRAINT pk_marca PRIMARY KEY (id_marca)
);

CREATE TABLE CLIENTE (
	cpf INTEGER NOT NULL,
    nome VARCHAR(255),
    telefone VARCHAR(11),
    CONSTRAINT pk_cliente PRIMARY KEY (cpf)
);

CREATE TABLE BANDA (
	id_banda INTEGER AUTO_INCREMENT,
    nome_banda VARCHAR(255),
    fk_cliente INT,
    CONSTRAINT pk_banda PRIMARY KEY (id_banda),
    CONSTRAINT fk_banda_1 
		FOREIGN KEY (fk_cliente) 
        REFERENCES CLIENTE (cpf)
);

CREATE TABLE DESPESA (
	id_despesa INT AUTO_INCREMENT,
    valor FLOAT,
    pago_em DATE,
    parcelas INT,
    fk_cat_recurso INT,
    CONSTRAINT pk_despesa PRIMARY KEY (id_despesa),
    CONSTRAINT fk_despesa_1
		FOREIGN KEY (fk_cat_recurso) 
        REFERENCES CAT_RECURSO (id_cat_recurso)
);

CREATE TABLE RECEITA (
	id_receita INT AUTO_INCREMENT,
    fk_cat_recurso INT,
    fk_cliente INT,
    valor FLOAT,
    recebido_em DATE,
    disponivel_em DATE,
    parcelas INT,
    valor_faltante FLOAT,
    fk_ap_receita INT,
    CONSTRAINT pk_receita PRIMARY KEY (id_receita),
    CONSTRAINT fk_cat_recurso_1
		FOREIGN KEY (fk_cat_recurso)
        REFERENCES CAT_RECURSO (id_cat_recurso),
	CONSTRAINT fk_receita_2
		FOREIGN KEY (fk_cliente)
        REFERENCES CLIENTE (cpf),
	CONSTRAINT fk_receita_3
		FOREIGN KEY (fk_ap_receita)
        REFERENCES CAT_APLICACAO (id_ap_receita)
);

CREATE TABLE HORARIO (
	horario DATETIME,
    fk_cliente INT,
    fk_receita INT,
    CONSTRAINT pk_horario PRIMARY KEY (horario),
    CONSTRAINT fk_horario_1
		FOREIGN KEY (fk_cliente)
        REFERENCES CLIENTE (cpf),
	CONSTRAINT fk_horario_2
		FOREIGN KEY (fk_receita)
        REFERENCES RECEITA (id_receita)
);

CREATE TABLE PRODUTO (
	id_produto INT AUTO_INCREMENT,
    nome_produto VARCHAR(255),
    preco_compra FLOAT,
    preco_venda FLOAT,
    qtd_produto INT,
    fk_marca INT,
    fk_cat_produto INT,
    CONSTRAINT pk_produto PRIMARY KEY (id_produto),
    CONSTRAINT fk_produto_1
		FOREIGN KEY (fk_marca)
        REFERENCES MARCA (id_marca),
	CONSTRAINT fk_produto_2
		FOREIGN KEY (fk_cat_produto)
        REFERENCES CAT_PRODUTO (id_cat_produto)
);

CREATE TABLE EQUIPAMENTO (
	id_equipamento INT AUTO_INCREMENT,
    data_locacao DATE,
    fk_receita INT,
    fk_cat_produto INT,
    fk_cliente INT,
    fk_marca INT,
    CONSTRAINT pk_equipamento PRIMARY KEY (id_equipamento),
    CONSTRAINT fk_equipamento_1
		FOREIGN KEY (fk_receita)
        REFERENCES RECEITA (id_receita),
	CONSTRAINT fk_equipamento_2
		FOREIGN KEY (fk_cat_produto)
        REFERENCES CAT_PRODUTO (id_cat_produto),
	CONSTRAINT fk_equipamento_3
		FOREIGN KEY (fk_cliente)
        REFERENCES CLIENTE (cpf),
	CONSTRAINT fk_equipamento_4
		FOREIGN KEY (fk_marca)
		REFERENCES MARCA (id_marca)
    
);