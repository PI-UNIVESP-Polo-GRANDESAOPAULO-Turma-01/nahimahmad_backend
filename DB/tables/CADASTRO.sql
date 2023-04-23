CREATE TABLE CADASTRO
(
	aluno varchar(20),
	EMAIL varchar(20),
    conservacao varchar(20),
    dt_entrega date, 
    MATRICULA int,
    n_de_serie int,
    
	CONSTRAINT PK_CONTRATO PRIMARY KEY (MATRICULA)
    
    );
