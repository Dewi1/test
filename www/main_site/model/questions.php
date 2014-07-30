<?php
function get_all_questions() {
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

function get_results()
{
    $questions = get_all_questions();

    $correct = 0;
    foreach ($questions as $question) {
        foreach ($question['answers'] as $answer){
            if ($_POST['question_' . $question['id']] == ('answer_' . $answer['id']) && $answer['correct'] == 1) {
                $correct++;
            }
        }
    }

    return $correct;
}
function get_percent()
{
    $myConnect = open_database_connection();

    $result = mysql_query("select count(id) as total from questions");
    $questions_count=mysql_fetch_assoc($result);

    $correct = get_results();
    $percent = 100 * $correct / $questions_count['total'];

    //close_database_connection($myConnect);

    return $percent;
}
