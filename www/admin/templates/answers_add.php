<?php $title = 'Add answer'; ?>
<center>
    <br><br><br><br><br>
    <form action="/admin/index.php?page=answers_add" method="post">
    <p>
        <b>Добавить вариант ответа:</b>
        <br>
        <input type="text" size="52" name="answer_add">
        <select name="lang">';
            <?php foreach ($lang as $question): ?>
                <option><?php echo $question['id']; ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <input type="checkbox" name="correct" value="1">
        Ответ верный
    </p>
    <input type="submit" value="Сохранить" name="submit">
    <input type="reset" value="Очистить">
    </form>

    <?php if($_POST["submit"] == "Сохранить" && $_POST["answer_add"] == ""):?>
        Поле не должно быть пустым!
    <?php endif?>
    <?php if($_POST["answer_add"] != ""): ?>
        <?php $answer = $_POST["answer_add"];?>
        <?php $post = $_POST["lang"];?>
        <?php $cor = check_correct($post);?>
        <?php if ($_POST["correct"] == 1 && $cor == 0):?>
            <?php $correct = 1;?>
        <?php endif?>
        <?php if($_POST["correct"] == 1 && $cor == true):?>
            Этот вариант ответа уже содержит в себе верный ответ!
            <br>
            Вариант ответа был сохранён как неверный
            <br>
        <?php endif?>
        <?php $result_an = add_answer($answer, $post, $correct); ?>
        <?php if ($result_an == 'true'): ?>
            БД 'answers' была обновлена
        <?php else:?>
            БД 'answers' НЕ была обновлена
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
