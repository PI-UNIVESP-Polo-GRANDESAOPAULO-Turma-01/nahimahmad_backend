<?php

$dbhost = "localhost";
$dbuser = "colegioa_chromeuser";
$dbpass = "mateus@2023";
$db = "colegioa_controlechrome";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Cria as tabelas ALUNO, APARELHO e CONTRATO usando a sintaxe SQL
$sql = "
CREATE TABLE ALUNO
(
	ID_ALUNO INT (20),
    NME_NOME VARCHAR(20),
	CONSTRAINT PK_ALUNO PRIMARY KEY (ID_ALUNO)
);

CREATE TABLE APARELHO
(
	NRO_SERIE INT (20),
    DSC_MARCA VARCHAR(20),
	DSC_MODELO VARCHAR(20),
	DSC_ESTADO VARCHAR(20),
	ID_ALUNO INT (20),
	CONSTRAINT PK_APARELHO PRIMARY KEY (NRO_SERIE)
);

CREATE TABLE CONTRATO
(
	ID_CONTRATO INT AUTO_INCREMENT,
	DTA_ASSINATURA DATE,
    DTA_VALIDADE DATE,
    ID_ALUNO INT, 
    NRO_SERIE INT,
	CONSTRAINT PK_CONTRATO PRIMARY KEY (ID_CONTRATO)
);
";

// Executa o comando SQL no banco de dados
if (mysqli_multi_query($conn, $sql)) {
    echo "Tabelas criadas com sucesso.";
} else {
    echo "Erro ao criar tabelas: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>