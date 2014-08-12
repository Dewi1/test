<?php session_start();
function authorization() {
    $myConnect = open_database_connection();

    $qr_result_users = mysql_query("select * from users");
    $users = array();
    $login =0; $password=0;
    while ($users = mysql_fetch_array($qr_result_users)){
        if($login == $users["login"] && $password = $users["password"]){
            $_SESSION['auth'] = '1';
        }
    }

    close_database_connection($myConnect);

    return $users;
}

function login_in(&$password, &$login) {
    $myConnect = open_database_connection();

    $qr_result_users = mysql_query("select * from users");
    $users = array();
    while ($users = mysql_fetch_array($qr_result_users)) {
        if ($login == $users["login"] && $password = $users["password"]) {
            $_SESSION['auth'] = 'user';
        }
    }

    close_database_connection($myConnect);

    return $users;
}
