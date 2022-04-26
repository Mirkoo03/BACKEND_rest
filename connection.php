<?php
// mi connetto a MySQL con mysqli_connect()

$host = "172.17.0.1:3306";
$user = "root";
$pass = "12345";
$db = "mydb";
// connessione al DB con il metodo or die in caso di errore
$connessione = mysqli_connect ($host, $user, $pass, $db)
    or die("Connessione non riuscita " . mysqli_connect_error() );
?>