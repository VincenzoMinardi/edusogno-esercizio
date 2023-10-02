<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
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
                <form action="process_registration.php" method="POST">
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci il nome:</label>
                        <input class="input" type="text" id="nome" name="nome" required>
                    </div>
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci il cognome:</label>
                        <input class="input" type="text" id="cognome" name="cognome" required>
                    </div>
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci l'email:</label>
                        <input class="input" type="email" id="email" name="email" required>
                    </div>
                    <div class="cont-text">
                        <label class="text" for="nome">Inserisci la password:</label>
                        <input class="input" type="password" id="password" name="password" required>
                    </div>
                    <button class="button-register" type="submit"> Registrati</button>
                </form>
            </div>

        </div>
    </main>

</body>

</html>