<?php

// migration dei dati all'interno del database MySQL
$migrationsFile = './assets/db/Migrations.sql';
$migrationStatusFile = 'migration_completed.txt'; // Il tuo file di controllo

$migrationsSql = file_get_contents($migrationsFile);

// Verifica se la migrazione è stata completata in precedenza
if (!file_exists($migrationStatusFile)) {
    $migrationsSql = file_get_contents($migrationsFile);

    if (mysqli_multi_query($connect, $migrationsSql)) {
        do {
            // Processa i risultati di ogni query (se necessario)
        } while (mysqli_next_result($connect));

        // Crea il file di controllo
        file_put_contents($migrationStatusFile, 'Migration completed');
    } else {
        echo 'Errore nella migrazione: ' . mysqli_error($connect);
    }
}
