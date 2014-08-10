<?php session_start();

function registration(&$login, &$password) {
    $myConnect = open_database_connection();

    $register = mysql_query("INSERT INTO users (login, password) VALUES('$login', '$password')");

    close_database_connection($myConnect);

    return $register;
}
