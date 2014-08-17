<?php session_start(); $title = "Add user"; ?>

<form method='POST' action='/admin/index.php?page=user_add'>
    <center>
        <br>
        <h2>Добавить пользователя:</h2>
        <br>
    </center>
    <div style="position:absolute; top:170px; left:540px; width:600px; text-align:left;">
        Логин:<br>
        Пароль:<br>
        E-mail:<br>
        Имя:<br>
        Возраст:<br>
        Пол:<br>
        О польз.:
    </div>
    <div style="position:absolute; top:170px; left:700px; width:600px; text-align:left;">
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
</form>

<?php if($_POST["sex"]=="male"):?>
    <?php $sex = "male"?>
<?php endif?>
<?php if($_POST["sex"]=="female"):?>
    <?php $sex = "female"?>
<?php endif?>
<?php if($_POST["login"] != "" && $_POST["password"] != "" && $_POST["email"] != ""):?>
    <?php $login = $_POST["login"]; ?>
    <?php $password = $_POST["password"]; ?>
    <?php $name = $_POST["name"]; ?>
    <?php $email = $_POST["email"]; ?>
    <?php $about = $_POST["about"]; ?>
    <?php $month_word = $_POST["month"];?>
    <?php $month = month($month_word);?>
    <?php $day = $_POST["day"];?>
    <?php $year = $_POST["year"];?>
    <?php $date = date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));?>
    <?php $user_add = add_user($login, $password, $name, $email, $about, $sex, $date); ?>
<?php endif?>

<center>
    <?php if($_POST["submit"] == "Сохранить" && $_POST["login"] == ""):?>
        Поле "Логин" не должно быть пустым!
    <?php endif?>
    <br>
    <?php if($_POST["submit"] == "Сохранить" && $_POST["password"] == ""):?>
        Поле "Пароль" не должно быть пустым!
    <?php endif?>
    <br>
    <?php if($_POST["submit"] == "Сохранить" && $_POST["email"] == ""):?>
        Поле "E-mail" не должно быть пустым!
    <?php endif?>
</center>
<center>
    <?php if($_POST["submit"] == "Сохранить" && $_POST["password"] != "" && $_POST["login"] != "" && $_POST["email"] != ""):?>
        Пользователь успешно добавлен.
    <?php endif?>
</center>

<form >
    <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
        <button type="button">
            <a href="/admin/index.php?page=user_change">Назад</a>
        </button>
    </div>
</form>
