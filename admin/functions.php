<?php
session_start();
?>
<?php
include '../database.php';

/**
 * @param string $icerik_title
 * @param string $icerik_kategori
 * @param string $icerik_desc
 * @return int
 *
 *
 *
 *
 * /******************************************* İÇERİK FUNCTIONS ***************************************************************************/


   /**** İçerik Ekleme Fonksiyon  */

function icerik_add(int $icerik_id, string $icerik_title, string $icerik_kategori, string $icerik_desc, int $uye_id):bool
{
    global $pdo;
    $prepared=$pdo->prepare("INSERT INTO icerik (icerik_id, icerik_title, icerik_kategori, icerik_desc, uye_id) VALUES (NULL ,?,?,?,?)");
    $prepared->execute([$icerik_title, $icerik_kategori, $icerik_desc, $uye_id]);
    return true;
}

/** İçerik Güncelleme Fonksiyonu   */
function icerik_list():array
{
    global $pdo;
    $prepared=$pdo->prepare("SELECT * FROM icerik");
    $prepared->execute([]);
    $data=$prepared->fetchAll();
    return $data;

}


/**  İçerik Silme Fonksiyonu */

function icerik_delete(int $icerik_id):int
{
    global $pdo;
    $prepared=$pdo->prepare("DELETE FROM icerik WHERE icerik_id=?");
    $prepared->execute([$icerik_id]);
    return true;
}

/** İçerik Güncelleme Fonksiyonu   */

function icerik_update(int $icerik_id, string $icerik_title, string $icerik_kategori, string $icerik_desc, int $uye_id):bool
{
    global $pdo;
    $prepared = $pdo->prepare("UPDATE icerik SET icerik_title=?, icerik_kategori=?, icerik_desc=?, uye_id=? WHERE icerik_id=?");
    $prepared->execute([$icerik_title, $icerik_kategori, $icerik_desc, $uye_id, $icerik_id ]);
    return true;
}
function get_icerik(int $icerik_id):array
{
    global $pdo;
    $prepared=$pdo->prepare("SELECT * FROM icerik WHERE icerik_id=:id");
    $prepared->execute(['id'=>$icerik_id]);
    return $prepared->fetch();
}


/**********************************************  MADDE FUNCTIONS   *****************************************************************/

/** Madde Ekleme */

function madde_add(int $madde_id, string $madde_baslik, string $madde_icerik,  int $icerik_id):bool
{
    global $pdo;
    $prepared=$pdo->prepare("INSERT INTO madde (madde_id, madde_baslik, madde_icerik, icerik_id) VALUES (NULL ,?,?,?)");
    $prepared->execute([$madde_baslik, $madde_icerik, $icerik_id]);
    return true;
}

/** Madde Listeleme */

function madde_list():array
{
    global $pdo;
    $prepared=$pdo->prepare("SELECT * FROM madde");
    $prepared->execute([]);
    $data=$prepared->fetchAll();
    return $data;

}

/** Madde Silme Fonksiynu */

function madde_delete(int $madde_id):int
{
    global $pdo;
    $prepared=$pdo->prepare("DELETE FROM madde WHERE madde_id=?");
    $prepared->execute([$madde_id]);
    return true;
}
/** Madde Güncelleme Fonksiyonu   */

function madde_update(int $madde_id, string $madde_baslik, string $madde_icerik, int $icerik_id):bool
{
    global $pdo;
    $prepared = $pdo->prepare("UPDATE madde SET madde_baslik=?, madde_icerik=?, icerik_id=? WHERE madde_id=?");
    $prepared->execute([$madde_baslik, $madde_icerik, $icerik_id, $madde_id ]);
    return true;
}


/** Madde get madde fonksiyonu */

function get_madde(int $madde_id):array
{
    global $pdo;
    $prepared=$pdo->prepare("SELECT * FROM madde WHERE madde_id=:id");
    $prepared->execute(['id'=>$madde_id]);
    return $prepared->fetch();
}


function login_check()
{
    return isset($_SESSION['login']) ? true : false;
}

function do_login(string $uyeadi, string $uyesifre): bool
{
    global $pdo;
    $query = $pdo->query("SELECT * FROM uyeler WHERE uye_adi='$uyeadi' AND uye_sifre='$uyesifre'");
    $user = $query->fetch();
    if ($user) {
        $_SESSION['login'] = true;
        return true;
    }
    return false;
}

function do_logout()
{
    unset($_SESSION['login']);
    return true;
}

?>