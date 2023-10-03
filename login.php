<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div>
                <h1>Edusogno</h1>
            </div>
            <div>
                <button id="registrazione" class="button">Register</button>
                <button id="login" class="button">Login</button>
            </div>
        </div>
    </header>
    <main>
        <!-- Modulo di registrazione -->
        <div class="container-register">
            <h2 class="title">Accedi al tuo account</h2>
            <div class="container-form">
                <form action="process_registration.php" method="POST">
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci l'email:</label>
                        <input class="input" type="email" id="email" name="email" placeholder="abcd@libero.it" required>
                    </div>
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci la password:</label>
                        <input class="input" type="password" id="password" name="password" placeholder="1234" required>
                    </div>
                    <button class="button-register" type="submit"> Accedi</button>
                </form>
            </div>

        </div>
    </main>
</body>

</html>


<?php

require_once 'Connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];



    $sql = "SELECT * FROM utenti WHERE username";

    if ($conn->query($sql) === true) {
        echo "Registrazione effettuata con successo!";
    } else {
        echo "Registrazione non effettuata: " . $conn->error;
    }
}


?>