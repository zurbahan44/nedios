<?php
/**
 * Created by PhpStorm.
 * User: Yalçın Demirtaş
 * Date: 26.02.2017
 * Time: 13:16
 */
$config = include 'config.php';
$dsn = "mysql:host=" . $config['database_host'] . ';dbname=' . $config['database_name'] . ';charset=utf8';
$pdo = new PDO($dsn, $config['database_username'], $config['database_password'], [PDO::ATTR_EMULATE_PREPARES => false]);