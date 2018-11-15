<?php
require_once("verificar_usuario_autenticado.php");
   

$id = $_GET["id"];

$sql = "DELETE FROM tarefas ";
$sql .=" WHERE id = ".$id;

require_once("criar_conexao.php");

if($conn->query($sql) === TRUE){
    echo "Registro excluído com sucesso";
}else{
    echo "Ao tentar executar a query:<br>";
    echo $sql . "<br><br>";
    echo "Ocorreu o seguinte erro:<br>";
    echo $conn->error;
}

?>

<br><br>
<a href="index.php">Voltar</a>