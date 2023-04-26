CREATE TABLE CADASTRO
(
	ID_CONTRATO INT AUTO_INCREMENT,
    aluno varchar(20),
	Responsavel varchar(20),
    conservacao varchar(20),
    dt_entrega date, 
    MATRICULA int,
    n_de_serie int,
    
	CONSTRAINT PK_CONTRATO PRIMARY KEY (MATRICULA)
    
    );
