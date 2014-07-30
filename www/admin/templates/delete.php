<?php $title = 'delete'; ?>
    <form action="/admin/index.php?page=delete" method="post">

    <?php /* $s=0;$k=0;
    $qr_result_questions = mysql_query("select * from questions");  //выбираем все значения из таблицы
    while ($questions = mysql_fetch_array($qr_result_questions))
    {
        $k++;
        echo '<br><input type="submit" name="question_'.$k.'" value="Удалить">
        '.$questions['title'];
        $vol_q = $questions['id'];
        if ($_POST['question_' . $k] == "Удалить")
        {
            $qr_del_ques = mysql_query("delete from questions where id=".$vol_q);
            $qr_del_ans = mysql_query("delete from answers where question_id=".$vol_q);
            echo "<b>".'. . .Удалено'."</b>";
        }
        echo "<ul><li>";
        $qr_result_answers = mysql_query("select * from answers where question_id=".$questions['id']);
        while ($answers = mysql_fetch_array($qr_result_answers))
        {
            $s++;
            echo '<br><input type="submit" name="answer_'.$s.'" value="Удалить">
            '.$answers['answer'];
            $vol_a = $answers['id'];
            if ($_POST['answer_' . $s] == "Удалить")
            {
                $qr_del_ans = mysql_query("delete from answers where id=".$vol_a);
                echo "<b>".'. . .Удалено'."</b>";
            }
        }
        echo "</li></ul>";
    } */ ?>

    <? $s=0;$k=0; ?>
    <?foreach ($questions as $question): ?>
        <? $k++; ?>
        <br>
        <input type="submit" name="question_'.$k.'" value="Удалить">
        <? echo $question['title']; ?>
        <? $vol_q = $question['id']; ?>
        <?if ($_POST['question_' . $k] == "Удалить"):?>
            <?php $qr_del_ques = mysql_query("delete from questions where id=".$vol_q); ?>
            <?php $qr_del_ans = mysql_query("delete from answers where question_id=".$vol_q);?>
            <b>. . .Удалено</b>
        <?endif?>
        <br>
        <ul>
            <?foreach ($question['answers'] as $answer):?>
                <li>
                    <? $s++; ?>
                    <input type="submit" name="answer_'.$s.'" value="Удалить">
                    <? echo $answer['answer']; ?>
                    <? $vol_a = $answer['id']; ?>
                    <?if ($_POST['answer_' . $s] == "Удалить"):?>
                        <? $qr_del_ans = mysql_query("delete from answers where id=".$vol_a); ?>
                        <b>. . .Удалено</b>
                    <?endif?>
                    <br>
                </li>
            <?endforeach?>
        </ul>
    <?endforeach?>


    <br><br>
    </form>
    <form >
        <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
            <button type="button">
                <a href="/admin/index.php?page=change">Назад</a>
            </button>
        </div>
    </form>
