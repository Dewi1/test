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
    $lang = lang();
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
function user_add() {
    ob_start();
    include 'templates/user_add.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function user_editing() {
    $users = users();
    ob_start();
    include 'templates/user_editing.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function editing() {
    $users = users();
    ob_start();
    include 'templates/editing.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function user_delete() {
    $users = users();
    ob_start();
    include 'templates/user_delete.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
