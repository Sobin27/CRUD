<?php
    include_once "Conector.php";

        try { 
            $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

            $isenter = $pix->prepare("DELETE FROM Macrofont WHERE id=:id");
            $isenter->bindParam(':id', $id);
            $isenter->execute();

            header("location:Indelink.php");
        }
        catch(PDOException $Vish){ 
            echo "erro" .$Vish->getMessage();
        }

?>