<?php
include "functions.php";


if(isset($_POST['guncelle']))
{
    try{
        $madde_baslik= $_POST['madde_baslik'];
        $madde_icerik = $_POST['madde_icerik'];
        $icerik_id = $_POST['icerik_id'];
        $id=madde_update($_GET['id'], $madde_baslik, $madde_icerik, $icerik_id);
        $status=true;

        $message="Madde Guncellendi";
    }catch (Exception $e){
        $status=false;
        $message=$e->getMessage();
    }
    echo $message;

}
if (isset($_GET['id']) && $_GET['id']) {
    $madde = get_madde($_GET['id']);
}



?>
<form method="post" action="madde_update.php?id=<?php echo $_GET['id']??null;?>">
    <input type="text" name="madde_baslik" id="madde_baslik" placeholder="Madde Baslık"
           value="<?php echo $madde['madde_baslik']??"";?>">
    <br>
    <input type="text" name="madde_icerik" id="madde_icerik" placeholder="Madde İçeriği"
           value="<?php echo $madde['madde_icerik']??"";?>">
    <br>
    <input type="text" name="icerik_id" id="icerik_id" placeholder="İçerik ID"
           value="<?php echo $madde['icerik_id']??"";?>">
    <br>
    <input type="submit"  value="Guncelle" name="guncelle">
    <br>
    <a href="madde_list.php">Geri Dön</a>
</form>




?>