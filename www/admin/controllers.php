<?php
function change() {
    ob_start();
    include 'templates/change.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function questions_add() {
    ob_start();
    include 'templates/questions_add.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function answers_add() {
    $questions = get_all_questions_admin();
    ob_start();
    include 'templates/answers_add.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function delete() {
    $questions = get_all_questions_admin();
    ob_start();
    include 'templates/delete.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function adminka() {
    ob_start();
    include 'templates/adminka.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function user_change() {
    ob_start();
    include 'templates/user_change.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
