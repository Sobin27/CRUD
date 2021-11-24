<?php

include_once "Conector.php";

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consulta = $pix->query("SELECT * FROM Macrofont WHERE id = '$id'");
$linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>



<form action="Editor.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
    nome:
    <input type="text" name="nome" value="<?php echo $linha['nome'] ?>" id="nome"><br>
    email:
    <input type="email" name="email" value="<?php echo $linha['email'] ?>" id="email"><br>
    <input type="submit" value="save">

</form>