<?php
session_start();
include_once("bdo_Real.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, login, nome, senha, status FROM user WHERE login='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
		
		
			    if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['login'] = $row_usuario['login'];
				$_SESSION['status'] = $row_usuario['status'];
				//$_SESSION['tempo'] = time() + 60*30;
				
			header("Location: ../main.php");
			}else{
					$_SESSION['msg'] = "<div class='alert alert-danger'>
                     <strong>Senha incorreta!</strong>Favor digitar novamente.
                    </div>";
					
	                header("Location: ../login.php");
			}
		}
	}else{
			$_SESSION['msg'] = "<div class='alert alert-danger'>
                     <strong>Senha incorreta!</strong>Favor digitar novamente.
                    </div>";
					
	                header("Location: ../login.php");
	}
}else{
    	$_SESSION['msg'] = "<div class='alert alert-danger'>
                     <strong>Página não encontrada!</strong>Tente novamente mais tarde.
                    </div>";
					
	                header("Location: ../login.php");
	                
}

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			

?>