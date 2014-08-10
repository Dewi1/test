<?php
session_start();
define('DS', DIRECTORY_SEPARATOR);
require 'model/database.php';

// Загружаем и инициализируем глобальные библиотеки
require 'controllers.php';
require 'model/questions.php';
require 'model/changes.php';
require 'model/functions.php';

// Внутренняя маршрутизация
if (isAuthorized()) {
    $page = null;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    switch ($page) {
        case null:
        case "change":
            change();
            break;
        case "questions_add":
            questions_add();
            break;
        case "answers_add":
            answers_add();
            break;
        case "delete":
            delete();
            break;
        case "adminka":
            adminka();
            break;
        case "user_change":
            user_change();
            break;

        default:
            echo '<html><body><h1>Page Not Found</h1></body></html>';
            break;
    }
}
