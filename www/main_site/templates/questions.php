<?php $title = 'Questions'; ?>
<form  method="post" action="/index.php?page=results">
    <?php foreach ($questions as $question): ?>
        <?php echo $question['title']; ?>
        <br>
        <ul>
            <?php foreach ($question['answers'] as $answer): ?>
                <li>
                    <input type="radio" id="answer_<?php echo $answer['id']; ?>" name="question_<?php echo $question['id']; ?>" value="answer_<?php echo $answer['id']; ?>">
                    <label for="answer_<?php echo $answer['id']; ?>"><?php echo $answer['answer']; ?></label>
                    <br>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?>
    <?if($_SESSION['auth'] == 'user' || $_SESSION['auth'] == 'admin'):?>
        <center>
            <input name='submit' type='submit' value='Отправить'>
        </center>
    <?else:?>
        <center>
            <h3>Авторизируйтесь, что бы узнать результаты тестирования.</h3>
        </center>
    <?endif?>
</form>
