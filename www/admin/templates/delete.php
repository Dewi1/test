<?php $title = 'delete';?>
<form action="/admin/index.php?page=delete" method="post">
<?php $s=0;$k=0;?>
<?php foreach ($questions as $question):?>
    <?php $k++;?>
    <br>
    <input type="submit" name="question_<?php echo $k; ?>" value="Удалить">
    <?php echo $question['title'];?>
    <?php $vol_q = $question['id'];?>
    <?php if ($_POST['question_'.$k] == "Удалить"):?>
        <?php $qr_del_ques = delete_question($vol_q);?>
        <?php $qr_del_ans = delete_question_answer($vol_q);?>
        <b>. . .Удалено</b>
    <?php endif?>
    <br>
    <ul>
        <?php foreach ($question['answers'] as $answer):?>
            <li>
                <?php $s++;?>
                <input type="submit" name="answer_<?php echo $s; ?>" value="Удалить">
                <?php echo $answer['answer'];?>
                <?php $vol_a = $answer['id'];?>
                <?if ($_POST['answer_'.$s] == "Удалить"):?>
                    <?php $qr_del_answ = delete_answer($vol_a);?>
                    <b>. . .Удалено</b>
                <?php endif?>
                <br>
            </li>
        <?php endforeach?>
    </ul>
<?php endforeach?>
<br><br>
<div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
    <button type="button">
        <a href="/admin/index.php?page=change">Назад</a>
    </button>
</div>
</form>
