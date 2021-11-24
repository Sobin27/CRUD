<?php
include_once "Conector.php";
    $id = filter_var($_GET ["id"], FILTER_SANITIZE_NUMBER_INT);
    $consulta = $pix -> query("SELECT * FROM Macrofont WHERE id = '$id' ");
    $linha = $consulta -> fetch(PDO:: FETCH_ASSOC);
    
    echo "Quer mesmo fazer essa escolha?";
    echo "<a href = 'Deleter.php ?id=$linha[id]'>Sim</a> ";

    echo " <a href = 'Indelink.php'>não<a/>";
?>