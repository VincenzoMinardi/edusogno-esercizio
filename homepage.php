<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
} else {
    $nome = "Utente Sconosciuto";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <h1 class="title-homepage">Benvenuto <?php echo $nome ?></h1>
</body>

</html>