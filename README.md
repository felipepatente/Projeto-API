Documentação

Ferramentas usadas para fazer o projeto
•	PHP (NetBeans)
•	MySQL (Workbench)
•	Postman
•	PHPUnit
•	XAMPP

Configurando o número da porta 80 do Apache no Xampp
•	Abra o painel do Xampp e clique no botão config do Apache;
•	Escolha o arquivo chamado httpd.conf. Ele possui todos os parâmetros de funcionamento do Apache;
•	Aperte as teclas CTRF+F e pesquise pela palavra Listen 80;
•	Adicione mais um número ao final desse parâmetro ficando: Listen 8080;
•	Pesquise outra palavra chave chamada ServerName e adicione o 80 no localhost:8080;
•	Salve e feche o arquivo;
•	Volte ao Dashboard e clique no ícone Config;
•	Depois vá em Service and Port Settings;
•	Adicione o 8080 no Main Port;


Criando o Banco
Para montar o banco eu criei o seguinte script:
CREATE DATABASE MeuWebAPI;

CREATE TABLE ENDERECO(
	ID INT PRIMARY KEY AUTO_INCREMENT,
	PAIS VARCHAR(25) NULL,
ESTADO VARCHAR(2) NULL,
	CIDADE VARCHAR(30) NULL,
    	LOGRADOURO VARCHAR(50) NULL
);


INSERT INTO ENDERECO VALUES (DEFAULT,'BRASIL','SP','ITAPECERICA','RUA CAMBUCI, 354');
INSERT INTO ENDERECO VALUES (DEFAULT,'BRASIL','SP','ITAPECERICA DA SERRA','RUA CAMBUCI, 353');


Fazendo as requisições 
GET: http://localhost:8080/MeuWebApi/EnderecoAPI.php
POST: http://localhost:8080/MeuWebApi/EnderecoAPI.php
Depois clique na aba Body do Postman, vai em raw, depois vai onde está escrito (normalmente está escrito) text e muda para JSON (application/json)
Digite o JSON a seguir:
{
	"PAIS": "VALOR",
	"ESTADO": "VALOR",
	"CIDADE": "VALOR",
	"LOGRADOURO": "VALOR"
}

PUT: http://localhost:8080/MeuWebApi/EnderecoAPI.php
Faz a mesma configuração do POST
Digite o seguinte JSON:
{
	"ID": "VALOR",
	"PAIS": " VALOR ",
	"ESTADO": "VALOR ",
	"CIDADE": " VALOR",
	"LOGRADOURO": " VALOR"
}



DELETE: http://localhost:8080/MeuWebApi/EnderecoAPI.php
Faz a mesma configuração do POST
Digite o seguinte JSON:
{
	"ID": "VALOR"
}

Instalando o Composer
Foi necessário instalar essa ferramenta para poder executar o comando que permitiria instalar o phpunit.
Acesse o site: https://getcomposer.org/download/, faz o download do executável Composer-Setup.exe, depois é a base do Next. No meu caso não foi necessário, mas tem alguns casos que precisa configurar a variável de ambiente.
Depois de ter feito isso, vai na linha de comando do Windows e digite a seguinte linha de comando:
composer global require "phpunit/phpunit=4.1.*"

Para executar o teste unitário usando o phpunit
Pela linha de comando vai na pasta onde esta o arquivo e digite a seguinte linha de comando:
Phpunit NomeDoArquivoTest.php

