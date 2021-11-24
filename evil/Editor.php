<?php
include_once "Conector.php";

try{ 
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$name = filter_var($_POST['nome']);
$email = filter_var($_POST['email']);

$isenter = $pix->prepare("UPDATE Macrofont SET nome=:nome, email=:email WHERE id=:id");
$isenter->bindParam(':id', $id);
$isenter->bindParam(':nome', $name);
$isenter->bindParam(':email', $email);
$isenter->execute();

header("location:Indelink.php");
}
catch(PDOException $Vish){
    echo "erro".$Vish->getMessage();
}

?>