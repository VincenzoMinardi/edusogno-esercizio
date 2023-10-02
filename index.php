<?php
// collegamento database mysql alla pagina index
require_once './assets/db/Connect.php';

// migration dei dati all'interno del database MySQL
$migrationsFile = './assets/db/Migrations.sql';

$migrationsSql = file_get_contents($migrationsFile);

if (mysqli_multi_query($connect, $migrationsSql)) {
    do {
    } while (mysqli_next_result($connect));
    echo 'Migrazione completata con successo!';
} else {
    echo 'Errore nella migrazione: ' . mysqli_error($connect);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
</body>

</html>