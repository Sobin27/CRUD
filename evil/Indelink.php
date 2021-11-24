<?php
include_once "Conector.php";

try {
     $consulta = $pix->query ("SELECT * FROM Macrofont");
    echo "<a href='Fornt.php'> Novo cadastro</a><br><br>Listagem de Usuários<br>";

    echo "<table border='1'<tr><td>Nome</td><td>Login</td><td>Ações</td><br><br></tr>";

     while($Linha = $consulta->fetch(PDO::FETCH_ASSOC)){
     echo "<tr><td>$Linha[nome]</td><td>$Linha[email]</td><td><a href='Formex.php?id=$Linha[id]'>Editar</a> -
     <a href='Confirmedelete.php?id=$Linha[id]'>Excluir</a></td></tr>";
  

    }

    echo "</table>"; 
}catch(PDOException $e) {
    echo "Error" . $e->getMessage();
}
?>