<?php $title = 'Add answer'; ?>
<center>
    <br><br><br><br><br>
    <form action="/admin/index.php?page=answers_add" method="post">
    <p>
        <b>Добавить вариант ответа:</b>
        <br>
        <input type="text" size="52" name="answer_add">
        <select name="lang">';
            <?php $qr_result_questions = mysql_query("select * from questions"); ?>
            <?php $num=0; ?>
            <?php $id=0; ?>
            <?php while($questions = mysql_fetch_array($qr_result_questions)):?>
                <?php echo '<option>'. $questions['id'] .'</option>' ?>
            <?php endwhile;?>
        </select>
        <br>
        <input type="checkbox" name="correct" value="1">
        Ответ верный
    </p>
    <input type="submit" value="Сохранить" name="submit">
    <input type="reset" value="Очистить">
    </form>

    <?php if($_POST["answer_add"] != "")
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
        if ($result_an == 'true')
        {
            echo "БД 'answers' была обновлена";
        } else {
            echo "БД 'answers' НЕ была обновлена";
        }
    }
    if($_POST["submit"] == "Сохранить" && $_POST["answer_add"] == "")
    {
        echo 'Поле не должно быть пустым!';
    }?>

    <br><br>
    <form >
        <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
            <button type="button">
                <a href="/admin/index.php?page=change">Назад</a>
            </button>
        </div>
    </form>
</center>
