<?php
session_start();
require_once 'Connect.php';

if (isset($_POST['new_password'])) {
    $new_password = $_POST['new_password'];
    $email = $_POST['email'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }


    $check_email_sql = "SELECT * FROM utenti WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email_sql);

    if (mysqli_num_rows($result) > 0) {

        $update_password_sql = "UPDATE utenti SET password = '$new_password' WHERE email = '$email'";

        if (mysqli_query($conn, $update_password_sql)) {
            echo "<h1>La password è stata cambiata correttamente!</h1>";
            header('location:login.php');
        } else {
            echo "<h1>Errore nell'aggiornamento della password:</h1> " . mysqli_error($conn);
        }
    } else {
        echo "<h1>Email non trovata nel database. Nessuna modifica alla password effettuata.</h1>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="./assets/js/script.js" defer></script>
    <title>Cambio Password</title>
</head>

<body>
    <h1 class="title-change">Cambia qui la tua password</h1>
    <main>
        <div class="container-register">
            <div class="container-form">
                <form action="" method="POST">
                    <div class="cont-text">
                        <label class="text" for="user_id">Inserisci Email:</label>
                        <input class="input" type="text" id="email" name="email" required>
                    </div>
                    <div class="cont-text">
                        <label class="text" for="new_password">Inserisci la nuova password:</label>
                        <input class="input" type="password" id="new_password" name="new_password" required>
                    </div>
                    <button class="button-register" type="submit">Cambia Password</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>