<?php

try {
     $pix = new PDO("mysql:host=localhost; dbname=evil", "root");
    $pix->exec("set names utf8");
}catch(PDOException $erro){ 
    echo"erro de execução".$erro->getMessage();

}
?>