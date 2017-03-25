<?php
include "functions.php";

try {
    $madde_id = $_GET['id'];
   madde_delete($madde_id);
    $status = true;
    $message = "Madde ID Silindi";
}catch (Exception $e){

    $status=false;
    $message=$e->getMessage();

}
echo $message;




?>
<br>
<a href="madde_list.php">Geri DÖn</a>
