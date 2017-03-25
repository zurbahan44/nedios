<?php
include 'function.php';
?>

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
<?php
if (isset($_POST['_submit'])){
    try {
        $uyeadi=$_POST['uyeadi'];
        $uyesifre=$_POST['uyesifre'];
        $logged=do_login($uyeadi,$uyesifre);
        if($logged){
            $status=true;
            $message="Giriş yapıldı";
        }else{
            throw new Exception("Giriş Başarısız");
        }
    }catch (Exception $e){
        $status=false;
        $message=$e->getMessage();
    }
    ?>
    <div class="<?php echo $status?'succes':'error';?>"><?php echo $message; ?></div>
    <?php
}
?>
<form action="login.php" method="post">
    <label for="Kullanıcı adı">Kullanıcı adı</label>
    <input type="text" name="uyeadi" id=""><br>
    <label for="Şifre ">Şifre </label>
    <input type="uyesifre" name="uyesifre" id="">
    <input type="submit" name="_submit" value="Giriş">
</form>
</body>
</html>
