<?php session_start(); $title = "Log-in"; ?>
<center>
    <form method='POST' action='/index.php?page=login'>

        <?if($_POST['login'] == 'admin' && $_POST['pass'] == 'admin'):?>
            <?php $_SESSION['auth'] = 'admin'; ?>
            <?endif?>
        <?if($_SESSION['auth'] == 'admin' || $_SESSION['auth'] == 'user'):?>
            <div style="position:absolute; top:40px; left:10px; width:120px; text-align:center;">
                <input name='submit' type='submit' value='Выход'>
            </div>
        <?else:?>
            <br><br><br><br>
            <input type="text" name="login" style="width:140px; text-align:center;">
            <br>
            <input type="password" name="pass" style="width:140px; text-align:center;">
            <br><br>
            <input type="submit" value="Вход" style="width:80px; text-align:center;">
        <?endif?>
    </form>

    <?php
        $myConnect = open_database_connection();

        $qr_result_users = mysql_query("select * from users"); //выбираем все значения из таблицы
        $users = array();
        $login = $_POST["login"];
        $password = $_POST["password"];
        while ($users = mysql_fetch_array($qr_result_users)) {
            if ($login == $users["login"] && $password = $users["password"]) {
                $_SESSION['auth'] = 'user';
            }
        }

        close_database_connection($myConnect);
    ?>

    <?if($_SESSION['auth'] == 'user'):?>
        <br><br>
        <h2>Вы авторизированы как USER</h2>
    <?endif?>
    <?if($_SESSION['auth'] == 'admin'):?>
        <br><br>
        <h2>Вы авторизированы как ADMIN</h2>
    <?endif?>

    <?if($_POST["submit"]=='Выход'):?>
        <? $_SESSION['auth']=null; ?>
        <br><br>
        <h2>Вы вышли из системы!</h2>
    <?endif?>
</center>
<form >
    <div style="position:absolute; top:10px; left:10px; width:120px; text-align:center;">
        <button type="button">
            <a href="/index.php?page=questions">На главную</a>
        </button>
    </div>
</form>
