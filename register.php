<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Kullanıcı Kayıt</h1>
    <?php
    if (isset($_POST['submit'])){
        try{
            $uyeadi=$_POST['uyeadi'];
            $uyesifre=$_POST['uyesifre'];
            kaydet($uyeadi,$uyesifre,$_GET['uye_id']??0);
            $status=true;
            $message="Kullanıcı Başarıyla eklendi";
        }catch (Exception $e){
            $status=false;
            $message=$e->getMessage();
        }
        ?>
</div>
<div class="<?php echo $status?'succes':'error';?>"><?php echo $message; ?></div>
<?php
}
if (isset($_GET['uye_id'])){
    $customer = get_customer($_GET['uye_id']);
    }
    ?>
<form method="post" action="register.php?uye_id=<?php echo $_GET['uye_id']??null;?>">
    <label for="uyeadi">Kullanıcı Adı : </label><input type="text" name="uyeadi" id="uyeadi" placeholder="Kullanıcı adı" value="<?php echo $customer['uyeadi']??"";?>"><br>
    <label for="sifre">Şifre : </label><input type="text" name="sifre" id="sifre" placeholder="Şİfre" value="<?php echo $customer['uyesifre']??"";?>"><br>
    <input type="submit" name="_submit" value="Kaydet">
</form>

</div>
</body>
</html>