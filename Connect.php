<?php
$servername = "localhost"; // Nome del server del database
$username = "root";   // Nome utente del database
$password = "root";      // Password del database
$dbname = "db_edusogno";   // Nome del database


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
