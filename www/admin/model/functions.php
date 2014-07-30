<?php
function isAuthorized() {
    return $_SESSION['auth'] == 'admin';
}