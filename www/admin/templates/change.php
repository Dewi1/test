<?php $title = 'Adminka'; ?>
<br><br><br><br><br>
<form >
    <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
        <button type="button">
            <a href="/index.php?page=questions">Главная</a>
        </button>
    </div>
</form>
<form >
    <center>
        <button type="button">
            <a href="/admin/index.php?page=delete">Удалить вопрос\ответ</a>
        </button>
    </center>
</form>
<form >
    <center>
        <button type="button">
            <a href="/admin/index.php?page=questions_add">Добавить вопросы</a>
        </button>
    </center>
</form>
<form >
    <center>
        <button type="button">
            <a href="/admin/index.php?page=answers_add">Добавить ответы</a>
        </button>
    </center>
</form>
<form action="/admin/index.php?page=change" method="post">
    <center>
       <input type="submit" name="ask_1" value="На все ли вопросы есть варианты ответов?">
    </center>
    <br>
    <center>
       <input type="submit" name="ask_2" value="У всех ли вопросов есть правильный ответ?">
    </center>
</form>
<center>
    <?php if($_POST["ask_1"] == "На все ли вопросы есть варианты ответов?")
    {
        $qr_result_questions = mysql_query("select * from questions");  //выбираем все значения из таблицы
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
        $kol=0;
        for ($k=0; $k<$j;$k++)
        {
            if($array3[$k]>0)
            {
                $results = mysql_query("SELECT title FROM questions WHERE id = '$array3[$k]'");
                $rs = mysql_fetch_array($results);
                $s = $rs['title'];
                echo 'Вопрос "'. $s .'" c id:"'.$array3[$k].'" не содержит вариантов ответов.<br>';
                $kol++;
            }
        }
        if($kol == null)
        {
            echo 'НА ВСЕ';
        }
    }
    if($_POST["ask_2"] == "У всех ли вопросов есть правильный ответ?")
    {
        $qr_result_questions = mysql_query("select * from questions");  //выбираем все значения из таблицы
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
        $kol_correct=0;
        for ($l=0; $l<$j;$l++)
        {
            //var_dump('$correct');
            if($array3[$l]>0 && '$correct' == 0)
            {
                $results = mysql_query("SELECT title FROM questions WHERE id = '$array3[$l]'");
                $rs = mysql_fetch_array($results);
                $s = $rs['title'];
                echo 'Вопрос "'. $s .'" c id:"'.$array3[$l].'" не содержит правильного ответа.<br>';
                $kol_correct++;
            }
        }
        if($kol_correct == null)
        {
            echo 'У ВСЕХ';
        }
    } ?>
</center>