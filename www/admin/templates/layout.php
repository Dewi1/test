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
        </style>
    </head>
    <body>
        <font size="5" face="Arial_Black">
            <?php
                echo $content
            ?>
        </font>
    </body>
</html>