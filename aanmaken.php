<?php
declare(strict_types=1);
session_start();
require_once "includes/connectPDO.php";

echo 'Gegevens aanmaken' . '</br>';
$conn = db_connect();

$insertQuery = "INSERT INTO accounts (username) VALUES ('Leerlingen')";
$conn->exec($insertQuery);
 