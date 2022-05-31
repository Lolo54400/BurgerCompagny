<?php

$host = 'localhost';
$dbname = "burger";
$user = 'root';
$mdp = '';
$charset = 'utf8';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $mdp);
} catch (PDOException $fail) {
    echo 'erreur: ' . $fail->getMessage();
    die();
}



session_start();
