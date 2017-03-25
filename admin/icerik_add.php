<?php
include "functions.php";
if(!login_check()){
    header("Location: /nedios/login.php");
    exit;
}

if(isset($_POST['icerik_submit'])){
    try {


        $icerik_title = $_POST['icerik_title'];
        $icerik_kat = $_POST['icerik_kategori'];
        $icerik_desc = $_POST['icerik_desc'];
        $uye_id = $_POST['uye_id'];
        icerik_add(0,$icerik_title, $icerik_kat, $icerik_desc, $uye_id);
        $status = true;
        $message = "İçerik Başarıyla Eklendi";

    }catch (Exception $e){
        $status=false;
        $message=$e->getMessage();
    }
    echo $message;
}



?>

<form method="post" action="icerik_add.php">
    <input type="text" name="icerik_title" value="" placeholder="İçerik Başlığı">
    <br>
    <br>
    <input type="text" name="icerik_kategori" value="" placeholder="İçerik Kategorisi">
    <br>
    <br>
    <textarea type="text" name="icerik_desc" placeholder="İçerik Açıklaması" ></textarea>
    <br>
    <br>
    <input type="text" name="uye_id" value="" placeholder="Üye ID Numarası" >
    <br>
    <br>
    <input type="submit" name="icerik_submit" value="İçerik Ekle">
</form>