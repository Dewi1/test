<?php session_start(); $title = "Registration"; ?>

<center>
    <form method='POST' action='/index.php?page=register'>
        <br>
        <h1>Регистрация</h1>
        <br><br><br>
        Выберите себе логин:<br><input type="text" name="login" style="width:140px; text-align:center;">
        <br>
        Создайте ваш пароль:<br><input type="text" name="password" style="width:140px; text-align:center;">
        <br><br>
        <input type="submit" name="submit" value="Сохранить" style="width:80px; text-align:center;">
    </form>
</center>

<?php if($_POST["login"] != "" && $_POST["password"] != ""):?>
    <?php $login = $_POST["login"]; ?>
    <?php $password = $_POST["password"]; ?>
    <?php $register = registration($login, $password); ?>
<?php endif?>

<center>
    <?php if($_POST["submit"] == "Сохранить" && $_POST["login"] == ""):?>
        Поле "Выберите себе логин" не должно быть пустым!
    <?php endif?>
    <br>
    <?php if($_POST["submit"] == "Сохранить" && $_POST["password"] == ""):?>
        Поле "Создайте ваш пароль" не должно быть пустым!
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
