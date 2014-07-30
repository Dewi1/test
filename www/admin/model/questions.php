<?php
function get_all_questions_admin() {
    $myConnect = open_database_connection();

    $qr_result_questions = mysql_query("select * from questions");  //выбираем все значения из таблицы
    $questions = array();
    while ($question = mysql_fetch_array($qr_result_questions)){
        $qr_result_answers = mysql_query("select * from answers where question_id=".$question['id']);
        $question['answers'] = array();
        while ($answer = mysql_fetch_array($qr_result_answers)){
            $question['answers'][] = $answer;
        }
        $questions[] = $question;
    }

    close_database_connection($myConnect);

    return $questions;
}
