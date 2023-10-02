<?php

$host = "localhost:3306";       // Host del database
$user = "root";                 // Nome utente del database
$password = "root";             // Password del database
$database = "table_edusogno";   // Nome del database

$connect = new mysqli($host, $user, $password);

if ($connect->connect_error) {
    die('Errore di connessione: ' . $connect->connect_error);
}

// Creazione del Database
$sql = "CREATE DATABASE IF NOT EXISTS $database";

if ($connect->query($sql) === true) {
    echo "Database creato o esistente con successo<br>";
} else {
    echo "Errore nella creazione del database: " . $connect->error . "<br>";
}

$connect->close();

$connect = new mysqli($host, $user, $password, $database);

if ($connect->connect_error) {
    die('Errore di connessione al database: ' . $connect->connect_error);
}
