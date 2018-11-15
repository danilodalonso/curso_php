<?php
    session_start();
    if($_SESSION["tem_usuario_autenticado"] != 1){
        $location = "location:login.php";
    }else{
        $location = "location:listar_tarefas.php";
    }
    header($location);    

?>