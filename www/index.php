<?php
session_start();
define('DS', DIRECTORY_SEPARATOR);
require 'main_site/model/database.php';

// Загружаем и инициализируем глобальные библиотеки
require 'main_site/model/questions.php';
require 'main_site/controllers.php';
require 'main_site/model/functions.php';
require 'admin/controllers.php';

// Внутренняя маршрутизация
$page = null;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
switch ($page) {
    case null:
    case "questions":
        question_actions();
        break;
    case "results":
        results_action();
        break;
    case "login":
        login();
        break;
    case "register":
        register();
        break;

    default:
        echo '<html><body><h1>Page Not Found</h1></body></html>';
        break;
}
