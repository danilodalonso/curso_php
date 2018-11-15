<?php

  session_start();
    if($_SESSION["tem_usuario_autenticado"] != 1){
        header("location:login.php");
    }


?>