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

function check_correct(&$post) {
    $myConnect = open_database_connection();

    $qr_result_answers = mysql_query("select * from answers");
    $cor=0;
    while ($answers = mysql_fetch_array($qr_result_answers)) {
        if($answers['correct'] == 1 && $answers['question_id']==$post) {
            $cor++;
        }
    }

    close_database_connection($myConnect);

    return $cor;
}

function add_answer(&$answer, &$post, &$correct) {
    $myConnect = open_database_connection();

    $result_an = mysql_query("INSERT INTO answers (answer, question_id, correct) VALUES('$answer', '$post', '$correct') ");

    close_database_connection($myConnect);

    return $result_an;
}

function lang() {
    $myConnect = open_database_connection();

    $qr_lang = mysql_query("select id from questions");
    $lang = array();
    while ($question = mysql_fetch_array($qr_lang)){
        $lang[] = $question;
    }

    close_database_connection($myConnect);

    return $lang;
}

function delete_question(&$vol_q) {
    $myConnect = open_database_connection();

    $qr_del_ques = mysql_query("delete from questions where id=".$vol_q);

    close_database_connection($myConnect);

    return $qr_del_ques;
}

function delete_question_answer(&$vol_q) {
    $myConnect = open_database_connection();

    $qr_del_ans = mysql_query("delete from answers where question_id=".$vol_q);

    close_database_connection($myConnect);

    return $qr_del_ans;
}

function delete_answer(&$vol_a) {
    $myConnect = open_database_connection();

    $qr_del_answ = mysql_query("delete from answers where id=".$vol_a);

    close_database_connection($myConnect);

    return $qr_del_answ;
}

function check_answer() {
    $myConnect = open_database_connection();

    $qr_result_questions = mysql_query("select * from questions");
    $i=0;$array1 = array();
    $j=0;$array2 = array();
    while ($questions = mysql_fetch_array($qr_result_questions))
    {
        $i++;
        $array1[$i] = $questions['id'];
        $qr_result_answers = mysql_query("select * from answers");
        while ($answers = mysql_fetch_array($qr_result_answers))
        {
            $j++;
            $array2[$j] = $answers['question_id'];
        }
    }
    $array3 = array_diff($array1, $array2);

    close_database_connection($myConnect);

    return $array3;
}

function check_answer_correct() {
    $myConnect = open_database_connection();

    $qr_result_questions = mysql_query("select * from questions");
    $i=0;$array1 = array();
    $j=0;$array2 = array();
    while ($questions = mysql_fetch_array($qr_result_questions))
    {
        $i++;
        $array1[$i] = $questions['id'];
        $qr_result_answers = mysql_query("select * from answers WHERE correct = '1'");
        while ($answers = mysql_fetch_array($qr_result_answers))
        {
            $j++;
            $array2[$j] = $answers['question_id'];
        }
    }
    $array3 = array_diff($array1, $array2);

    close_database_connection($myConnect);

    return $array3;
}


function check_j() {
    $myConnect = open_database_connection();

    $qr_result_questions = mysql_query("select * from questions");
    $i=0;$array1 = array();
    $j=0;$array2 = array();
    while ($questions = mysql_fetch_array($qr_result_questions))
    {
        $i++;
        $array1[$i] = $questions['id'];
        $qr_result_answers = mysql_query("select * from answers");
        while ($answers = mysql_fetch_array($qr_result_answers))
        {
            $j++;
            $array2[$j] = $answers['question_id'];
        }
    }
    $array3 = array_diff($array1, $array2);

    close_database_connection($myConnect);

    return $j;
}

function check_title(&$array3, &$k) {
    $myConnect = open_database_connection();

    $results = mysql_query("SELECT title FROM questions WHERE id = '$array3[$k]'");

    close_database_connection($myConnect);

    return $results;
}

function check_title_correct(&$array3, &$l) {
    $myConnect = open_database_connection();

    $results = mysql_query("SELECT title FROM questions WHERE id = '$array3[$l]'");

    close_database_connection($myConnect);

    return $results;
}
