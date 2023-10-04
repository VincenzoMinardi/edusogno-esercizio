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
        <!-- Modulo di login -->
        <div class="container-register">
            <h2 class="title">Accedi al tuo account</h2>
            <div class="container-form">
                <form action="homepage.php" method="POST">
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
require_once "Connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];


        $sql = "SELECT * FROM utenti WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                // Verificare la password
                if (password_verify($password, $row['password'])) {
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    header('location: homepage.php');
                } else {
                    echo "La password non è corretta";
                }
            } else {
                echo "Nessun account trovato con questa email";
            }
        } else {
            echo "Errore nella query: " . $conn->error;
        }
    }
}

$conn->close();







?>