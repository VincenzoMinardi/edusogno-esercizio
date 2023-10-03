<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrazione</title>
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
            <h2 class="title">Crea il tuo Nuovo Account</h2>
            <div class="container-form">
                <form action="register.php" method="POST">
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci il nome:</label>
                        <input class="input" type="text" name="nome" required>
                    </div>
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci il cognome:</label>
                        <input class="input" type="text" name="cognome" required>
                    </div>
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci l'email:</label>
                        <input class="input" type="email" name="email" required>
                    </div>
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci la password:</label>
                        <input class="input" type="password" name="password" required>
                    </div>
                    <button class="button-register" type="submit"> Registrati</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>

<?php
require_once "Connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $name = $_POST["nome"];
        $surname = $_POST["cognome"];
        $email = $_POST["email"];
        $pass = $_POST["password"];


        if ($conn->select_db("db_edusogno")) {
            $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$name', '$surname', '$email', '$pass')";

            if ($conn->query($sql) === true) {
                echo "Registrazione effettuata con successo!";
            } else {
                echo "Registrazione non effettuata: " . $conn->error;
            }
        }
    }
}


$conn->close();
?>