<?php

$dsn = "mysql:dbname;host=localhost";
$dbuser = "username";
$dbpass = "password";


try{
	
	$pdo = new PDO($dsn, $dbuser, $dbpass);


	//echo "Conectado com sucesso";

	}catch(PDOException $e){
			echo "Falhou: ".$e->getMessage();

			//echo "ERRO de conexao";

			}


	$servidor = "localhost";
	$usuario = "root";
	$senha = "username";
	$dbname = "password";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);





?>
