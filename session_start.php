<?php
            session_start();


            if(!empty($_SESSION['id'] ) ||  !empty($_SESSION['nome'] ) ){
          
            }else{
          $_SESSION['msg'] = "Área restrita";
          header("Location: login.php");  
          session_destroy();
            }

?>
