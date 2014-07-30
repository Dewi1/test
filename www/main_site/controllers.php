<?php
function question_actions() {
    $questions = get_all_questions();
    ob_start();
    include 'templates/questions.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function results_action() {
    $correct = get_results();
    $percent = get_percent($correct);
    ob_start();
    include 'templates/results.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
function login() {
    //$users = authorization();
    ob_start();
    include 'templates/login.php';
    $content = ob_get_clean();
    include 'templates/layout.php';
}
