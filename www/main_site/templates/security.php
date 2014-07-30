<?php  session_start(); ?>
<?if($_SESSION['auth'] == 'user' || $_SESSION['auth'] == 'admin'):?>
<?else:?>
    <?php $URL = "http://test/index.php?page=login"; ?>
    <?php header("Location: $URL"); ?>
<?endif?>