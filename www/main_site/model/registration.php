<?php session_start();

function registration(&$login, &$password, &$name, &$email, &$about, &$sex, &$date) {
    $myConnect = open_database_connection();

    $register = mysql_query("INSERT INTO users (login, password, name, email, about, sex, age) VALUES('$login', '$password', '$name', '$email', '$about', '$sex', '$date')");

    close_database_connection($myConnect);

    return $register;
}

function month(&$month_word)
{
    if ($month_word == "Январь") {
        $month = 1;
    }
    if($month_word == "Февраль"){
        $month = 2;
    }
    if($month_word == "Март"){
        $month = 3;
    }
    if($month_word == "Апрель"){
        $month = 4;
    }
    if($month_word == "Май"){
        $month = 5;
    }
    if($month_word == "Июнь"){
        $month = 6;
    }
    if($month_word == "Июль"){
        $month = 7;
    }
    if($month_word == "Август"){
        $month = 8;
    }
    if($month_word == "Сентябрь"){
        $month = 9;
    }
    if($month_word == "Октябрь"){
        $month = 10;
    }
    if($month_word == "Ноябрь"){
        $month = 11;
    }
    if($month_word == "Декабрь"){
        $month = 12;
    }

    return $month;
}
