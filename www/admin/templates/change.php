<?php $title = 'Change tests'; ?>
<br><br><br><br><br>
<form >
    <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
        <button type="button">
            <a href="/admin/index.php?page=adminka">Назад</a>
        </button>
    </div>
    <center>
        <button type="button">
            <a href="/admin/index.php?page=delete">Удалить вопрос\ответ</a>
        </button>
    </center>
    <br>
    <center>
        <button type="button">
            <a href="/admin/index.php?page=questions_add">Добавить вопросы</a>
        </button>
    </center>
    <br>
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
    <?php if($_POST["ask_1"] == "На все ли вопросы есть варианты ответов?"):?>
        <?php $array3 = check_answer();?>
        <?php $j=check_j();?>
        <?php $kol=0;?>
        <?php for ($k=0; $k<$j;$k++):?>
            <?php if($array3[$k]>0):?>
                <?php $results = check_title($array3, $k);?>
                <?php $rs = mysql_fetch_array($results);?>
                <?php $s = $rs['title'];?>
                <?php echo 'Вопрос "'. $s .'" c id:"'.$array3[$k].'" не содержит вариантов ответов.<br>';?>
                <?php  $kol++;?>
            <?php endif?>
        <?php endfor?>
        <?php if($kol == null):?>
            НА ВСЕ
        <?php endif?>
    <?php endif?>
    <?php if($_POST["ask_2"] == "У всех ли вопросов есть правильный ответ?"):?>
        <?php $array3 = check_answer_correct();?>
        <?php $j=check_j();?>
        <?php $kol_correct=0;?>
        <?php for ($l=0; $l<$j;$l++):?>
            <?php if($array3[$l]>0 && '$correct' == 0):?>
                <?php $results = check_title_correct($array3, $l);?>
                <?php $rs = mysql_fetch_array($results);?>
                <?php $s = $rs['title'];?>
                <?php echo 'Вопрос "'. $s .'" c id:"'.$array3[$l].'" не содержит правильного ответа.<br>';?>
                <?php $kol_correct++;?>
            <?php endif?>
        <?php endfor?>
        <?php if($kol_correct == null):?>
            У ВСЕХ
        <?php endif?>
    <?php endif?>
</center>