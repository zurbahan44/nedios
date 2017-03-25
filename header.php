<?php
include "function.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title>Sayfa başlığı</title>
    <style>
        *{margin:0; padding:0;}
        .menu{width:800px; height:48px; background:#000; margin:0 auto;border-bottom:4px solid red;
            display: block;}
        .menu ul li {
            float:left;
            list-style-type:none;
            display: block;
            width:100px;}
        .menu ul li a{color:#fff; font:17px Arial;text-decoration:none;display:block; padding:14px 15px;transition:all .5s;-webkit-transition:all .5s;-moz-transition:all .5s;}
        .menu ul li a:hover{
            background:red;
            color:yellow;
        }
    </style>
    <style type="text/css">
        .footer { background:#222222;width:100%; height:269px;float:left;color:white; font-family:arial;}
        .footer #kutu b {font-size:14px;}
        * {margin:0px;padding:0px;}
        .footer_container{width:768px; height:175px; margin:30px auto;}
        .footer ul {list-style-type:none;margin:17px 0;padding:0px;}
        #kutu {width:auto; height:125px; float:left;}
        .footer ul li {float:left;font-family:tahoma; font-size:12px; margin-bottom:8px; clear:left; color:#949798; }
        #kutu:last-child li {float:left;clear:none;margin-right:10px;}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <div class="menu">
        <ul>
            <li><a href="http://localhost/nedios/index.php">Anasayfa</a></li>
            <li><a href="#">Galeri</a></li>
            <li><a href="#">Videolar</a></li>
            <li><a href="#">Haberler</a></li>
            <li><a href="#">İletişim</a></li>
            <li><a href="#">Vizyon</a></li>
            <li><a href="#">Misyon</a></li>
            <li><a href="#">Testler</a></li>
        </ul>
    </div>
</header>
<div id="main">