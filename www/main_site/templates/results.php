<?php $title = 'Results'; ?>
<center>
    <br><br><br><br><br>
    Ваш результат:<br><br>
    <?php printf("Правильных ответов: %d , это: %.0f %%", $correct, $percent);?>
    <br><br>
    <div style="text-align:center;">
        <button type="button">
            <a href="/index.php?page=questions">Ещё раз!</a>
        </button>
    </div>
</center>
