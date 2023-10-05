<?php
session_start();
require_once 'Connect.php';

if (isset($_POST['new_password'])) {
    $new_password = $_POST['new_password'];
    $user_id = $_POST['user_id'];


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sql = "UPDATE utenti SET password = '$new_password' WHERE id = '$user_id'";

    if (mysqli_query($conn, $sql)) {
        echo "La password è stata cambiata correttamente!";
        exit();
    } else {
        echo "<h1 La password non è stata cambiata  </h1>";
        exit();
    }
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
            <h2 class="title">Accedi al tuo account</h2>
            <div class="container-form">
                <form action="" method="POST">
                    <div class="cont-text">
                        <label class="text" for="user_id">Inserisci User ID:</label>
                        <input class="input" type="text" id="user_id" name="user_id" required>
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