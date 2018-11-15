<?php
require_once("verificar_usuario_autenticado.php");
$key = $_POST["key"];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tarefas</title>
    </head>
    <style>
        table{
            font-family:arial, sans-serif;
            border-collapse: collapse;
            width:100%;
        }
        th,td{
            border: 1px solid black;
            text-align:left;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:silver;
        }
        th{
            background-color:black;
            color:white;
        }
        
    </style>
    <body>   

            <a href="incluir_tarefa.php">Incluir Tarefa</a>

            <br><br>

            <form action="listar_tarefas.php" method="post">

                <input type="text" name="key"/>
                <input type="submit" value="Buscar"/><br><br>
            
            </form>

            <?php

            require_once("criar_conexao.php");

            $sql = "SELECT * FROM tarefas";
            if($key != ""){
                $sql .= " WHERE nome like '%$key%' ";
            }

            $result = $conn->query($sql);

            if($result->num_rows . 0){
                echo "<table>";
                echo "<tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Detalhes</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                    </tr>";

                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>"; 
                    echo "<td>".$row["nome"]."</td>"; 
                    echo "<td>".$row["detalhes"]."</td>"; 
                    echo "<td>";
                    echo ($row["status"]==0)?"A fazer":"Feita";
                    echo "<td><a href='excluir_tarefa.php?id=".$row["id"]."'>Excluir</a></td>"; 
                    echo "<td><a href='incluir_tarefa.php?id=".$row["id"]."'>Alterar</a></td>"; 

                    echo "</tr>";


                }
                echo "</table>";

            }else{
                echo "Não retornou registros";
            }

            $conn->close();



            ?>
    </body>
</html>            

