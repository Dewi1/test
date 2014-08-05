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

function add_question(&$title) {
    $myConnect = open_database_connection();

    $result_tit = mysql_query("INSERT INTO questions (title) VALUES('$title')");

    close_database_connection($myConnect);

    return $result_tit;
}

function add_answer() {
    $myConnect = open_database_connection();

    if($_POST["answer_add"] != "")
    {
        $answer = $_POST["answer_add"];
        $post = $_POST["lang"];
        $qr_result_answers = mysql_query("select * from answers");
        $cor=0;
        while ($answers = mysql_fetch_array($qr_result_answers))
        {
            if($answers['correct'] == 1 && $answers['question_id']==$post)
            {
                $cor++;
            }
        }
        if ($_POST["correct"] == 1 && $cor == 0)
        {
            $correct = 1;
        }elseif($_POST["correct"] == 1){
            echo 'Этот вариант ответа уже содержит в себе верный ответ!'.'<br>';
            echo 'Вариант ответа был сохранён как неверный.'.'<br>';
        }
        $result_an = mysql_query("INSERT INTO answers (answer, question_id, correct) VALUES('$answer', '$post', '$correct') ");
    }

    close_database_connection($myConnect);

    return $result_an;
}

function lang() {
    $myConnect = open_database_connection();

    $qr_lang = mysql_query("select id from questions");  //выбираем все значения из таблицы
    $lang = array();
    while ($question = mysql_fetch_array($qr_lang)){
        $lang = $question;
    }

    close_database_connection($myConnect);

    return $lang;
}
