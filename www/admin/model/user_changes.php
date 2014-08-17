<?php session_start();
function users() {
    $myConnect = open_database_connection();

    $qr_result_users = mysql_query("select * from users");  //выбираем все значения из таблицы
    $users = array();
    while ($user = mysql_fetch_array($qr_result_users)){
        $users[] = $user;
    }

    close_database_connection($myConnect);

    return $users;
}

function user_edition_config() {
    $myConnect = open_database_connection();

    $qr_del_answ = 1;

    close_database_connection($myConnect);

    return $qr_del_answ;
}

function delete_user(&$vol_u) {
    $myConnect = open_database_connection();

    $del_user = mysql_query("delete from users where id=".$vol_u);

    close_database_connection($myConnect);

    return $del_user;
}

function add_user(&$login, &$password, &$name, &$email, &$about, &$sex, &$date) {
    $myConnect = open_database_connection();

    $register = mysql_query("INSERT INTO users (login, password, name, email, about, sex, age) VALUES('$login', '$password', '$name', '$email', '$about', '$sex', '$date')");

    close_database_connection($myConnect);

    return $register;
}

function month(&$month_word) {
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
