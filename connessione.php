<?php
    $host = "localhost"; 
    $user = "root";
    $db = "aeroporto";
    $pass = "";
    //variabile di connessione
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
        die("Connessione al database fallita: " . mysqli_connect_error());
    }
?>
