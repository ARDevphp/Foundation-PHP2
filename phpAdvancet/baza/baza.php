<?php

$server = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'school';

try {
    $dns = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    echo 'Bazaga ulandi';
}catch (PDOException $e) {
    echo 'bazaga ulandi olmadi ' . $e->getMessage();
}
