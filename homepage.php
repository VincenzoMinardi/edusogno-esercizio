<?php
require_once 'Connect.php';
session_start();

if (isset($_SESSION['nome'])) {
    $username = $_SESSION['nome'];
} else {
    $username = "Utente";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>HomePage</title>
    <script src="./assets/js/script.js" defer></script>
</head>

<body>
    <header>
        <div>
            <button class="view" id="logout">Logout</button>
        </div>
    </header>

    <div class="container">
        <h1>Benvenuto <?php echo $username ?></h1>
        <div class="card-event">
            <div class="card">
                <h1 class="card-title">Nome Evento</h1>
                <p class="card-text">10-09-2023</p>
                <button class="view">View</button>
            </div>

            <div class="card">
                <h1 class="card-title">Nome Evento</h1>
                <p class="card-text">10-09-2023</p>
                <button class="view">View</button>
            </div>

            <div class="card">
                <h1 class="card-title">Nome Evento</h1>
                <p class="card-text">10-09-2023</p>
                <button class="view">View</button>
            </div>
        </div>
    </div>


</body>

</html>