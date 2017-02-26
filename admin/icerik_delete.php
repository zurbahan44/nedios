<?php

include "functions.php";

    try {
        $icerik_id = $_GET['id'];
        icerik_delete($icerik_id);
        $status = true;
        $message = "İçerik ID Silindi";
    }catch (Exception $e){

        $status=false;
        $message=$e->getMessage();

    }
    echo $message;




?>

