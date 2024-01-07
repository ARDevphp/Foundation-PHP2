<?php

declare(strict_types=1);

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'src';

try {
    $dns = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    echo 'Bazga ulandi';
}catch (PDOException $e) {
    echo 'bazaga ulana olmadi' . $e->getMessage();
}

