<?php
include "functions.php";

if(isset($_POST['madde_submit'])){
    try {
        $madde_baslik = $_POST['madde_baslik'];
        $madde_icerik = $_POST['madde_icerik'];
        $icerik_id=$_POST['icerik_id'];
        madde_add(0,$madde_baslik, $madde_icerik, $icerik_id);
        $status = true;
        $message = "Madde Başarıyla Eklendi";

    }catch (Exception $e){
        $status=false;
        $message=$e->getMessage();
    }
    echo $message;
}



?>

<form method="post" action="maddeler_add.php">
    <input type="text" name="madde_baslik" value="" placeholder="Madde Başlığı">
    <br>
    <br>
    <input type="text" name="madde_icerik" value="" placeholder="Madde İçeriği">
    <br>
    <input type="text" name="icerik_id" value="" placeholder="İçerik ID">
    <br>
    <input type="submit" name="madde_submit" value="Madde Ekle">
</form>