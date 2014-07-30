<?php
    function open_database_connection()
    {
        include(__DIR__ . DS . '..' . DS . '..' . DS . 'config.php');
        $myConnect = mysql_connect($db_host, $db_username, $db_password); //соединяемся с сервером базы данных
        mysql_select_db($db_name,$myConnect);  //подключаемся к базе данных
        mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");

        return $myConnect;
    }

    function close_database_connection($myConnect)
    {
        mysql_close($myConnect);
    }