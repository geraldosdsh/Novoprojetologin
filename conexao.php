<?php

$dns = 'mysql:host=localhost;dbname=banco1';
$username = 'root';
$password = '';

try {
    $db = new PDO($dns, $username, $password);
} catch (Exception $e) {
    die('conexao falhou' . $e->getMessage());
}


?>