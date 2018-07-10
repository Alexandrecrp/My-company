<?php
	/*error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	define("SERVER_DB","localhost");
	define("USER_DB","root");
	define("PASS_DB","");
	define("DATABASE_DB","riber167_db_lgerken");
	
	/*error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	define("SERVER_DB","localhost");
	define("USER_DB","riber167");
	define("PASS_DB","2l59sw2l59sw");
	define("DATABASE_DB","riber167_db_lgerken");
	
	// Mensagens de Erro
    $msg[0] = "Conexão com o banco falhou!";
    $msg[1] = "Não foi possível selecionar o banco de dados!";
	
	// Fazendo a conexão com o servidor MySQL
    $conexao = mysql_pconnect(SERVER_DB,USER_DB,PASS_DB) or die($msg[0]);
	
	// Selecionando Banco
    mysql_select_db(DATABASE_DB,$conexao) or die($msg[1]);
	
    // Setando Charset do banco
    mysql_set_charset('utf8');
?>