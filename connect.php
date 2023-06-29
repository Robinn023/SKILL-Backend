<?php
// Op MacOS is er een wachtwoord voor de gebruiker, op Windows vaak niet.
$DATABASE_HOST = 'localhostt';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'voorbeeld';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Connection Database voorbeeld failed: ' . mysqli_connect_error());
}