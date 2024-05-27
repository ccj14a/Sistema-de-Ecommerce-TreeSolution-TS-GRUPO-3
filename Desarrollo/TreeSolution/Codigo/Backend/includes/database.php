<?php

function conectarDb(): mysqli
{
    $db = new mysqli(
        "localhost","root","root","treesolutions"
    );

    $db->set_charset('utf8');

    if (!$db) {
        echo "Error: No se pudo conectar a MySQL.";
        echo "errno de depuración: " . mysqli_connect_errno();
        echo "error de depuración: " . mysqli_connect_error();
        exit;
    }

    return $db;
}
