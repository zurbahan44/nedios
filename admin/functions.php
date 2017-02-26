<?php
include '../database.php';

/**
 * @param string $icerik_title
 * @param string $icerik_kategori
 * @param string $icerik_desc
 * @return int
 *
 *   İçerik Ekleme Fonksiyon  */

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
    $prepared = $pdo->prepare("UPDATE icerik SET icerik_id=?, icerik_title=?, icerik_kategori=?, icerik_desc=?, uye_id=? WHERE icerik_id=?");
    $prepared->execute([$icerik_title, $icerik_kategori, $icerik_desc, $uye_id]);
    return true;
}

?>