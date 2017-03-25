<?php
session_start();
include "database.php";
$page_title = "Sayfa başlığı";

function kaydet(string $uyeadi, string $uyesifre, int $uye_id = 0): int
{
    global $pdo;
    if (strlen($uyeadi) < 3 || strlen($uyesifre) < 3) {
        throw new Exception("En az 3 karakter kullanın");
    }
    $prepared = $pdo->prepare("INSERT INTO uyeler(uye_id,uye_adi,uye_sifre) VALUES (NULL,?,?)");
    $prepared->execute([$uyeadi, $uyesifre]);
    return $pdo->lastInsertId();
}

?>