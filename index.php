<?php
require_once dirname(__FILE__).'/config.php';
include _ROOT_PATH .'/security/check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <title>Menu</title>
</head>
<body>
    <div class="pure-menu custom-restricted-width">
        <span class="pure-menu-heading">APLIKACJE INTERNETOWE</span>
        <ul class="pure-menu-list">
            <li class="pure-menu-item">
                <a href="<?= _CALC_PATH ?>" class="pure-menu-link">Kalkulator</a>
            </li>
            <li class="pure-menu-item">
                <a href="<?= _CREDIT_CALC_PATH ?>" class="pure-menu-link">Kalkulator kredytowy</a>
            </li>
            <li class="pure-menu-item">
                <a href="<?= _LOGOUT_PATH ?>" class="pure-menu-link">Wyloguj</a>
            </li>
        </ul>
    </div>
</body>
</html>