<?php

function getConnection(
    $servername = "localhost",
    $username = "root",
    $password = "root",
    $dbname = "db_hotel"
) {

    //effettuo connessione con i 4 parametri specificati
    $conn = new mysqli($servername, $username, $password, $dbname);

    //effettuo un controllo sulla connessione
    if ($conn && $conn->connect_error) {
        echo "Connessione al server fallita: " . $conn->connect_error;
    }

    return $conn;
}

function closeConn($conn, $stmt)
{
    $stmt->close();
    $conn->close();
}

function getStanzeSql() {
    return "SELECT stanze.id, stanze.room_number
            FROM stanze";
}

function getDetailsSql() {
    return "SELECT stanze.room_number, stanze.floor, stanze.beds
            FROM stanze
            WHERE stanze.id = ?";
}
