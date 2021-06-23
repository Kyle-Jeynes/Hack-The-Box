<?php

/**
 * Jaquarh was here
 **/

$stmt = ($pdo = new PDO('mysql:host=127.0.0.1;dbname=bread;charset=utf8mb4', 'bread', 'jUli901', [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
]))->Prepare('SHOW TABLES');

$stmt->execute();

var_dump($stmt->fetchAll());

$stmt = $pdo->Prepare('SELECT * FROM users');

$stmt->execute();

var_dump($stmt->fetchAll());
