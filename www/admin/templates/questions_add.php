<?php $title = 'Add question'; ?>
<center>
    <br><br><br><br><br>
    <form action="/admin/index.php?page=questions_add" method="post">
        <p>
            <b>Добавить вопрос:</b>
            <br>
            <input type="text" size="60" name="title_add">
        </p>
    <input type="submit" value="Сохранить" name="submit">
    <input type="reset" value="Очистить">
    </form>

    <?php if($_POST["title_add"] != ""):?>
        <?php $title = $_POST["title_add"]; ?>
        <?php $result_tit = mysql_query("INSERT INTO questions (title) VALUES('$title')"); ?>

        <?php if($result_tit == 'true'):?>
            БД 'questions' была обновлена
        <?php else:?>
            БД 'questions' НЕ была обновлена
        <?php endif?>
    <?php endif?>
    <?php if($_POST["submit"] == "Сохранить" && $_POST["title_add"] == ""):?>
        Поле не должно быть пустым!
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
