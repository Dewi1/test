<?php
function isAuthorized() {
    return $_SESSION['auth'] == 'user';
}