<?php
include_once "Conector.php";

try {
    $id = filter_var($_POST['id']);
    $name = filter_var($_POST['nome']);
    $email = filter_var($_POST['email']);

    $isenter = $pix->prepare("INSERT INTO Macrofont (nome, email) VALUES(:nome,:email)");
    $isenter->bindParam(':nome', $name);
    $isenter->bindParam(':email', $email);
    $isenter->execute();

    header("location:Indelink.php");


} catch (PDOException $Vish) {
    echo "erro" .$Vish->getMessage();
}
