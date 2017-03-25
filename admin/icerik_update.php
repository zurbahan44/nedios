<?php
include "functions.php";


if(isset($_POST['guncelle']))
{
    try{
        $icerik_title= $_POST['icerik_title'];
        $icerik_kat = $_POST['icerik_kategori'];
        $icerik_desc = $_POST['icerik_desc'];
        $uye_id = $_POST['uye_id'];
        $id=icerik_update($_GET['id'], $icerik_title, $icerik_kat, $icerik_desc, $uye_id);
        $status=true;

        $message="İcerik Guncellendi";
    }catch (Exception $e){
        $status=false;
        $message=$e->getMessage();
    }
    echo $message;

}
if (isset($_GET['id']) && $_GET['id']) {
    $icerik = get_icerik($_GET['id']);
}



?>
<form method="post" action="icerik_update.php?id=<?php echo $_GET['id']??null;?>">
    <input type="text" name="icerik_title" id="icerik_title" placeholder="Başlık"
           value="<?php echo $icerik['icerik_title']??"";?>">
    <br>
    <input type="text" name="icerik_kategori" id="icerik_kategori" placeholder="Kategori"
           value="<?php echo $icerik['icerik_kategori']??"";?>">
    <br>
    <input type="text" name="icerik_desc" id="icerik_desc" placeholder="Açıklama"
           value="<?php echo $icerik['icerik_desc']??"";?>">
    <br>
    <input type="text" name="uye_id" id="uye_id" placeholder="Üye ID"
           value="<?php echo $icerik['uye_id']??"";?>">
    <br>
    <input type="submit"  value="Guncelle" name="guncelle">
    <br>
    <a href="icerik_list.php">Geri Dön</a>
</form>