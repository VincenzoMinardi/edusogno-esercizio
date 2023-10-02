<?php
// collegamento database mysql alla pagina index
require_once './assets/db/Connect.php';
require_once './assets/db/Migration.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <script src="./assets/js/script.js" defer></script>
    <title>Edusogno</title>
</head>

<body>
    <header>
        <div class="container">
            <div>
                <h1 id="title">Edusogno</h1>
            </div>
            <div>
                <button id="registrazione" class="button">Register</button>
                <button id="login" class="button">Login</button>
            </div>

        </div>
    </header>
</body>

</html>