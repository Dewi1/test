<?php $title = 'Add answer'; ?>
<center>
    <br><br><br><br><br>
    <form action="/admin/index.php?page=answers_add" method="post">
    <p>
        <b>Добавить вариант ответа:</b>
        <br>
        <input type="text" size="52" name="answer_add">
        <select name="lang">';
            lang();
            <?php while($questions = mysql_fetch_array($qr_result_questions)):?>
                <option><?php echo $lang; ?></option>
            <?php endwhile;?>

            <?php /*<?php $qr_result_questions = mysql_query("select * from questions"); ?>
            <?php while($questions = mysql_fetch_array($qr_result_questions)):?>
                <?php echo '<option>'. $questions['id'] .'</option>' ?>
            <?php endwhile;?>*/ ?>
        </select>
        <br>
        <input type="checkbox" name="correct" value="1">
        Ответ верный
    </p>
    <input type="submit" value="Сохранить" name="submit">
    <input type="reset" value="Очистить">
    </form>

    <?php if($_POST["answer_add"] != ""): ?>
        <?php $answer = $_POST["answer_add"];?>
        <?php $post = $_POST["lang"];?>
        <?php $qr_result_answers = mysql_query("select * from answers");?>
        <?php $cor=0;?>
        <?php while ($answers = mysql_fetch_array($qr_result_answers)):?>
            <?php if($answers['correct'] == 1 && $answers['question_id']==$post):?>
                <?php $cor++;?>
            <?php endif?>
        <?php endwhile?>
        <?php if ($_POST["correct"] == 1 && $cor == 0):?>
            <?php $correct = 1;?>
        <?php endif?>
        <?php if($_POST["correct"] == 1):?>
            Этот вариант ответа уже содержит в себе верный ответ!
            <br>
            Вариант ответа был сохранён как неверный
            <br>
        <?php endif?>
        <?php $result_an = mysql_query("INSERT INTO answers (answer, question_id, correct) VALUES('$answer', '$post', '$correct') "); ?>
        <?php if ($result_an == 'true'): ?>
            БД 'answers' была обновлена
        <?php else:?>
            "БД 'answers' НЕ была обновлена
        <?php endif?>
    <?php endif?>

    <br><br>
    <form >
        <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
            <button type="button">
                <a href="/admin/index.php?page=change">Назад</a>
            </button>
        </div>
    </form>
</center>
