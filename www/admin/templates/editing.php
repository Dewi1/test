<?php session_start(); $title = "Editing"; ?>

<form action="/admin/index.php?page=editing" method="post">
    <div style="position:absolute; top:20px; left:540px; width:600px; text-align:left;">
        Логин:<br>
        Пароль:<br>
        E-mail:<br>
        Имя:<br>
        Возраст:<br>
        Пол:<br>
        О польз.:
    </div>
    <?php foreach ($users as $user):?>
        <div style="position:absolute; top:20px; left:920px; width:600px; text-align:left;"> <?php var_dump($user_id)?><br>
            <?php if($_POST['user_'.$k] == "Редактировать"):?>
                <?php echo $user['name'];?><br>
                <?php echo $user['login'];?><br>
                <?php echo $user['password'];?><br>
                <?php echo $user['email'];?><br>
                <?php echo $user['sex'];?><br>
                <?php echo $user['age'];?><br>
                <?php echo $user['about'];?>
            <?php endif?>
        </div>
    <?php endforeach?>
    <div style="position:absolute; top:20px; left:700px; width:600px; text-align:left;">
        <input type="text" name="login" style="width:140px; text-align:center;">*<br>
        <input type="text" name="password" style="width:140px; text-align:center;">*<br>
        <input type="text" name="email" style="width:140px; text-align:center;">*<br>
        <input type="text" name="name" style="width:140px; text-align:center;"><br>
        <select name="day">
            <?php $i = 1;?>
            <?php while ($i <= 31):?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php $i++;?>
            <?php endwhile?>
        </select>
        <select name="month">';
            <?php $month_add = array(
                "Январь",
                "Февраль",
                "Март",
                "Апрель",
                "Май",
                "Июнь",
                "Июль",
                "Август",
                "Сентябрь",
                "Октябрь",
                "Ноябрь",
                "Декабрь"
            );?>
            <?php foreach ($month_add as $m):?>
                <option value="<?php echo $m;?>"><?php echo $m;?></option>
            <?php endforeach?>
        </select>
        <select name="year">';
            <?php $j = 2014;?>
            <?php while ($j >= 1920):?>
                <?php $j--;?>
                <option value="<?php echo $j;?>"> <?php echo $j;?></option>
            <?php endwhile?>
        </select><br>
        <select name="sex">
            <option name="sex_male" value="male">Мужской</option>
            <option name="sex_female" value="female">Женский</option>
        </select><br>
        <textarea name="about" size="50" rows="3" cols="22"></textarea>
    </div>
    <center>
        <br><br><br><br><br><br><br><br><br>
        <input type="submit" name="submit" value="Сохранить" style="width:80px; text-align:center;">
    </center>


    <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
        <button type="button">
            <a href="/admin/index.php?page=user_editing">Назад</a>
        </button>
    </div>
</form>

