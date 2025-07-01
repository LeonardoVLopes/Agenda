<?php

    $host = 'localhost';
    $dbname = 'agenda';
    $user = 'root';
    $pass = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // ativar o modo de erro do PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // erro na conexão
        echo "Connection failed: " . $e->getMessage();
    }