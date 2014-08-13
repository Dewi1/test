<?php
    header('Content-Type: text/html; charset=utf-8');
    setlocale(LC_ALL, 'ru_RU.65001', 'rus_RUS.65001', 'Russian_Russia. 65001', 'russian');
?>
<html>
    <head>
        <title><?php echo $title ?></title>
        <style>
            a {
                text-decoration: none; /* Отменяем подчеркивание у ссылки */
            }
            li {
                list-style-type: none; /* Убираем маркеры */
            }
            textarea {
                resize: none; /* Запрещаем изменять размер */
            }
        </style>
    </head>
    <body>
        <font size="5" face="Arial_Black">
            <?php
                echo $content
            ?>
        </font>
    <?if($_SESSION['auth']=='admin'):?>
        <form >
            <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
                <button type="button">
                    <a href="/admin/index.php?page=adminka">Админка</a>
                </button>
            </div>
        </form>
        <form >
            <div style="position:absolute;top:40px; right:10px; width:80px; text-align:center;">
                <button type="button">
                    <a href="/index.php?page=login">Выйти</a>
                </button>
            </div>
        </form>
    <?endif?>
    <?if($_SESSION['auth']=='user'):?>
        <form >
            <div style="position:absolute;top:10px; right:10px; width:80px; text-align:center;">
                <button type="button">
                    <a href="/index.php?page=login">Выйти</a>
                </button>
            </div>
        </form>
    <?endif?>
    <?if($_SESSION['auth']!='user' && $_SESSION['auth']!='admin'):?>
        <form >
            <div style="position:absolute; top:10px; right:10px; width:80px; text-align:center;">
                <button type="button">
                    <a href="/index.php?page=login">Войти</a>
                </button>
            </div>
            <div style="position:absolute; top:40px; right:20px; width:80px; text-align:center;">
                <button type="button">
                    <a href="/index.php?page=register">Регистрация</a>
                </button>
            </div>
        </form>
    <?endif?>
    </body>
</html>