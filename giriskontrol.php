<?php
session_start();
if (!isset($_SESSION['login'])){
    echo 'Giriş Yapılmamış';
}else {
    echo 'Giriş Yapılmış';
}
?>