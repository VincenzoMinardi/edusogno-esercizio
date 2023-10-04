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
session_start();
require_once "Connect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location: index.php?error=Email is required");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM utenti WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['cognome'] = $row['cognome'];
                $_SESSION['id'] = $row['id'];
                header("Location: homepage.php");
                exit();
            }
        } else {
            header("Location: index.php?error=Email or Password not valid");
            exit();
        }
    }
}
?>