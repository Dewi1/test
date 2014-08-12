<?php session_start(); $title = "Registration"; ?>

<form method='POST' action='/index.php?page=register'>
    <center>
        <br>
        <h1>Регистрация</h1>
        <br>
    </center>
    <div style="position:absolute; top:170px; left:540px; width:600px; text-align:left;">
        Логин:<br>
        Пароль:<br>
        E-mail:<br>
        Имя:<br>
        Возраст:<br>
        Пол:<br>
        О себе:
    </div>
    <div style="position:absolute; top:170px; left:700px; width:600px; text-align:left;">
        <input type="text" name="login" style="width:140px; text-align:center;">*<br>
        <input type="text" name="password" style="width:140px; text-align:center;">*<br>
        <input type="text" name="email" style="width:140px; text-align:center;">*<br>
        <input type="text" name="name" style="width:140px; text-align:center;"><br>
        <select name="day">';
            <option><?php  ?></option>
        </select>
        <select name="month">';
            <option><?php  ?></option>
        </select>
        <select name="yer">';
            <option><?php  ?></option>
        </select><br>
        <select name="sex">
            <option><?php  ?></option>
        </select><br>
        <input type="text" name="about" style="width:140px; text-align:center;">
    </div>
    <center>
        <br><br><br><br><br><br><br><br>
        <input type="submit" name="submit" value="Сохранить" style="width:80px; text-align:center;">
    </center>
</form>

<?php if($_POST["login"] != "" && $_POST["password"] != "" && $_POST["email"] != ""):?>
    <?php $login = $_POST["login"]; ?>
    <?php $password = $_POST["password"]; ?>
    <?php $name = $_POST["name"]; ?>
    <?php $email = $_POST["email"]; ?>
    <?php $about = $_POST["about"]; ?>
    <?php $register = registration($login, $password, $name, $email, $about); ?>
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
    <?php if($_POST["submit"] == "Сохранить" && $_POST["password"] != "" && $_POST["login"] != ""):?>
        Поздравляем! Вы успешно зарегестрировались на нашем сайте!
    <?php endif?>
</center>

<form >
    <div style="position:absolute; top:10px; left:10px; width:120px; text-align:center;">
        <button type="button">
            <a href="/index.php?page=questions">На главную</a>
        </button>
    </div>
</form>
