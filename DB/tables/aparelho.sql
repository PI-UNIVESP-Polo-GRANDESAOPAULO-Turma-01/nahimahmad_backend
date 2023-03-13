CREATE TABLE APARELHO
(
	NRO_SERIE INT (20),
    DSC_MARCA VARCHAR(20),
	DSC_MODELO VARCHAR(20),
	DSC_ESTADO VARCHAR(20),
	ID_ALUNO INT (20),
	CONSTRAINT PK_APARELHO PRIMARY KEY (NRO_SERIE)
);

/*
insert into aparelho 
(modelo, estado, idaluno)
values('SAMSUNG DAS54DAS', 'ZUADO', 2);

insert into aparelho 
(modelo, estado, idaluno)
values('LENOVO SAJ273S', 'NOVO', NULL);
*/