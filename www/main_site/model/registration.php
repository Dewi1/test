<?php session_start();

function registration(&$login, &$password, &$name, &$email, &$about) {
    $myConnect = open_database_connection();

    $register = mysql_query("INSERT INTO users (login, password, name, email, about) VALUES('$login', '$password', '$name', '$email', '$about')");

    close_database_connection($myConnect);

    return $register;
}
